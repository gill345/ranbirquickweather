<h1>Ranbir Quick Weather http://ranbirweather.wuaze.com/ </h1>

![weather](https://github.com/user-attachments/assets/1aebb985-60fc-4806-baee-7d56927b7ae9)

## Overview
Ranbir Quick Weather is a simple weather application built using PHP, HTML, CSS, and JavaScript. It fetches and displays real time weather information based on user provided city names, leveraging the OpenWeatherMap API. Your weather data is saved for up to a week using a cookie.

## Features
- Get current weather data including temperature, weather conditions, and local time.
- Dynamic background changes based on weather conditions.
- Uses cookies to remember the last searched city for up to a week.

## Technologies Used
- **PHP**: Backend logic and OpenWeatherMap API requests.
- **HTML/CSS**: Structuring and styling the frontend.
- **JavaScript**: Dynamic background updates based on weather conditions.
- **OpenWeatherMap API**: Fetches real-time weather data.

## Installation
1. Clone the repository or download the project files.
2. Ensure a local or online PHP server (e.g., XAMPP, InfinityFree) is set up.
3. Place the project files in the server's root directory (e.g., `htdocs` for XAMPP).
4. Update the OpenWeatherMap API key in the PHP file.

## Usage
1. Open the website in a web browser.
2. Enter a city name and click 'Get Weather'.
3. View the weather details, including the temperature, weather condition, and local time.
4. The background image changes based on the weather condition.
5. The last searched city is remembered for a week using cookies.

## File Structure
- `index.php`: Main file for handling user input and displaying weather data.
- `index.css`: Styling for the website.
- `backgrounds.js`: JavaScript for dynamic background changes.

## API Configuration
- The project uses the OpenWeatherMap API. Obtain an API key from https://openweathermap.org/ and replace the placeholder in the PHP file:
  ```php
  $apiKey = 'YOUR_API_KEY_HERE';
  ```



