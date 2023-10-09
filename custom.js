$(document).ready(function () {
    $("#b").click(function () {
        fname = $(".txtfname").val();
        lname = $("#txtlname").val();
        fatname = $("#txtfatname").val();
        motname = $("#txtmotname").val();
        add = $("#address").val();
        course = $("#course").val();
        phone = $("#phn").val();
        state = $("#state").val();
        pwd = $("#pwd").val();
        cpwd = $("#cpwd").val();
        if (fname.length == "" || lname.length == "" || fatname.length == "" || motname.length == "" || add.length == "" || course == "" || phone.length == 0 || state == "" || pwd.length == "" || cpwd.length == "") {
            
        }
        else if (add.length < 3) {
            alert("Enter Correct Address");
        }
        else if (phone.length != 10) {
            alert("Enter valid phone number");
        }
        else if(pwd != cpwd){
            alert("password did not match");
            
        }
        else{

        }
    });

});