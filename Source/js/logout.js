var logoutModal = document.getElementById("logoutModal");
var logoutLink = document.getElementById("logoutLink");
var confirmButton = document.getElementById("confirmLogout");
var cancelButton = document.getElementById("cancelLogout");

logoutLink.onclick = function() {
    logoutModal.style.display = "block";
}

confirmButton.onclick = function() {
    
    document.location='../index.html';
    logoutModal.style.display = "none";
}

cancelButton.onclick = function() {
    logoutModal.style.display = "none";
}