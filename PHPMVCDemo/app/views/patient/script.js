$(document).ready(function () {
    var gender = document.getElementById("gendercheck").value;
    
    if(gender =='1'){
        document.getElementById("Nam").checked = true;
    }else{
        document.getElementById("Nu").checked = true;
    }
});