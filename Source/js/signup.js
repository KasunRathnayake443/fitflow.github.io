var popup = document.getElementById("accountCreatedPopup");
var showButton = document.getElementById("showPopup");
var closeButton = document.getElementById("closePopup");

showButton.onclick = function() {
    popup.style.display = "block";
}

closeButton.onclick = function() {
    popup.style.display = "none";
}