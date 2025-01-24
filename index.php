<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport for scale -->
    <title>Ranbir Quick Weather</title>
    <link rel="stylesheet" href="index.css"> <!-- Link to css -->
    <link type="image/png" sizes="32x32" rel="icon" href=".../icons8-full moon-scribby-32.png"> <!-- Add favicon to site -->
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">

    <!-- JavaScript script to modify background based on weather -->
    <script src="backgrounds.js"></script>
</head>

<!-- Set font internally -->
<style>
    body{
        font-family: "Luxurious Roman", serif;
    }
</style>

<body>     
    <div class="textcontainer">
        <h1 class="pagetitle">Ranbir Quick Weather</h1>

        <!-- Collect city name using form -->
        <form method="POST">
            <label class="textlabel" for="city" required>Enter a City: </label><br><br>
            <input class="textbox" type="text" name="city" placeholder="Enter city" required>
            <button class="button" type="submit">Get Weather</button>
        </form>

        <?php

        // Get city name from form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $city = htmlspecialchars($_POST["city"]);

            // Set a cookie for 7 days to remember the last inputted city
            setcookie("user_city", $city, time() + (7 * 24 * 60 * 60), "/");
        }
            // Check if cookie is already set
            if (!$city && isset($_COOKIE["user_city"])) {
                $city = $_COOKIE["user_city"];
            }


            if ($city) {
            
                $apiKey = "api"; // Replace with your own API key

                // Generate a url using query strings to retrieve weather data from OpenWeatherMap
                $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";

                // Retrieve information from url file and store
                $response = file_get_contents($apiUrl);
                if ($response) {

                    // Convert json into an associative array
                    $weatherinfo = json_decode($response, true);

                    // Get time information, add timezone difference to OpenWeatherTime
                    $timezone = $weatherinfo["timezone"]; 
                    $localTime = gmdate("Y-m-d g:i A", time() + $timezone);

                    // Check for good response from API
                    if ($weatherinfo["cod"] == 200) {
                        
                        // List all information
                        echo "<div class='weather' style='text-align: center;'>";
                        echo "<h2>Weather in " . $weatherinfo["name"] . ", " . $weatherinfo["sys"]["country"] . "</h2>";
                        echo "<p>Temperature: " . $weatherinfo["main"]["temp"] . " °C</p>";
                        echo "<p>Condition: " . ucfirst($weatherinfo["weather"][0]["description"]) . "</p>";
                        echo "<p>Local Time: " . $localTime . "</p>";
                        echo "</div>";

                        // Change the background depending on the weather
                        echo "<script>setBackground('" . strtolower(ucfirst($weatherinfo["weather"][0]["description"])) . "');</script>";
                    } else {
                        echo "<p class='error'>City not found. Please try again.</p>";
                    }
                } else {
                    echo "<p class='error'>Error fetching weather data! Please try again later.</p>";
                }
            }

        ?>

    </div>
</body>

</html>