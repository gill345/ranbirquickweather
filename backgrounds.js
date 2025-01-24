function setBackground(condition) {
    const body = document.body; 
    let imageUrl = " ";

    
    if (condition.includes("clear")) {
        imageUrl = "url('https://images.pexels.com/photos/912110/pexels-photo-912110.jpeg?cs=srgb&dl=atmosphere-blue-sky-clouds-912110.jpg&fm=jpg')";
    } else if (condition.includes("clouds")) {
        imageUrl = "url('https://images.pexels.com/photos/158163/clouds-cloudporn-weather-lookup-158163.jpeg?cs=srgb&dl=clouds-cloudscape-cloudy-158163.jpg&fm=jpg')";
    } else if (condition.includes("rain") || condition.includes("drizzle")) {
        imageUrl = "url('https://th.bing.com/th/id/OIP.1w4QmHCkSLLZDTE6zOXBCAHaEn?rs=1&pid=ImgDetMain')";
    } else if (condition.includes("snow")) {
        imageUrl = "url('https://th.bing.com/th/id/R.290e0b2b138e58d03ba33f78186e1a41?rik=whFsEIkfsLOy8w&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fv6dkdkN.jpg&ehk=OZARfLVfhO%2bhqiKOVtX9R8MfeL92%2biCwyx9fDCUlPdw%3d&risl=&pid=ImgRaw&r=0')";
    } else if (condition.includes("thunderstorm")) {
        imageUrl = "url('https://wallpapercrafter.com/desktop/2922-lightning-thunderstorm-road-field-4k.jpg')";
    } else if (condition.includes("mist") || condition.includes("fog") || condition.includes("haze")) {
        imageUrl = "url('https://images.pexels.com/photos/12753143/pexels-photo-12753143.jpeg?cs=srgb&dl=pexels-darya-greyowl-12753143.jpg&fm=jpg')";
    } else {
        imageUrl = "url('https://images.pexels.com/photos/457882/pexels-photo-457882.jpeg?cs=srgb&dl=pexels-asadphoto-457882.jpg&fm=jpg')";
    }

  
    body.style.backgroundImage = imageUrl;
    body.style.backgroundSize = "cover";
    body.style.backgroundPosition = "center";
    body.style.backgroundRepeat = "no-repeat";
    body.style.height = "100vh";
    body.style.margin = "0";
}
