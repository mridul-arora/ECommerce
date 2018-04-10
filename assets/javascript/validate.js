 function validate(e) {
    var errors = [];
    flag = 0;
    if(document.getElementsByName("fname").value == null) {
        flag = 1;
        errors[errors.length] = "You must enter a name.";
        document.getElementsByName("fname").style.backgroundColor = "#ffcccc";
        reportErrors(errors);
		e.preventDefault();
        header("Location:../index.php");
    }
    else document.getElementsByName("fname").style.backgroundColor = "#fff";

    /*var s = document.getElementById("email").value;
    if(s.indexOf("upes.ac.in") == -1) {
        flag = 1;
        document.getElementById("email").style.backgroundColor = "#ffe5e5";
    }
    else document.getElementById("email").style.backgroundColor = "#fff";

    var cno = document.getElementById("cno").value;
    if(cno > 9999999999 || cno < 1000000000) {
        flag = 1;
        document.getElementById("cno").style.backgroundColor = "#ffe5e5";
    }
    else document.getElementById("cno").style.backgroundColor = "#fff";

    if(flag == 0) return true;
    else return false;*/
}
