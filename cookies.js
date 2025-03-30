// Function to get a cookie value by name
function getCookie(name) {
    let cookieArr = document.cookie.split(';');
    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split('=');
        if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

// Function to set a cookie
function setCookie(name, value, days) {
    let date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); // Expiry time in days
    let expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Function to check if cookies are accepted
function checkCookieConsent() {
    if (getCookie("cookieConsent") === "accepted") {
        document.getElementById("cookie-banner").style.display = "none"; // Hide the banner if accepted
    }
}

// Event listener for the accept button
document.getElementById("accept-cookies").addEventListener("click", function() {
    setCookie("cookieConsent", "accepted", 365);  // Set cookie for 1 year
    document.getElementById("cookie-banner").style.display = "none";  // Hide the banner
});

// Call checkCookieConsent when the page loads
checkCookieConsent();




