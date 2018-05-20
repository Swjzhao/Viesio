
function checkForm() {
    var username = document.getElementById("user").value;
    var pass =  document.getElementById("pass").value;
    //parse database to see if valid
    if (username == "test" && pass == "test") {
        window.location.href = "Dashboard.html";
        return false;
    }
}
