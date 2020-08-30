function passwordvalidate() {

    var check = document.signup_form.cpassword.value;
    var pass = document.signup_form.password.value;

    if (pass == check) {
        alert("done brother!");

    } else {

        alert("Both passwords should be same check password and try again!");
    }


}