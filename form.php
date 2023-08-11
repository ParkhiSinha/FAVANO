<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .box-outer {
    border: 1px solid #ccc;
    background-color: #FFFFFF;
    margin-bottom: 1rem;
    padding: 1rem;
    border-radius: .12rem;
}
/* Heading styles */
.heading {
    margin-bottom: 1rem;
}
/* Input control styles */
.input-control {
    transition: border .1s linear 0s, box-shadow .1s, width .25s, color .2s;
    border: 1px solid #ced4da;
    box-shadow: 0 1px 3px rgb(50 50 93 / 10%), 0 1px 0 rgb(0 0 0 / 2%);
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: .969rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    background-color: #FFF;
    background-clip: padding-box;
    appearance: none;
    border-radius: .12rem;
    margin-bottom: 1rem;
}
.input-control:focus {
    border-color: #9fd4fc;
    box-shadow: 0 0 0 4px rgb(0 149 255 / 15%);
    background-color: #fffffa;
    outline: 0;
}
/* Button styles */
.button {
    color: #FFFFFF;
    box-shadow: 0 1px 3px rgb(50 50 93 / 10%), 0 1px 0 rgb(0 0 0 / 2%);
    background: linear-gradient(#6dbd45, #51a326);
    border: 0;
    padding: .5rem;
    border-radius: .12rem;
}
.button:focus {
    background: linear-gradient(#5EA534, #519327);
}


        </style>
</head>
<body>
    <!-- Form -->
<div class="box-outer">
    <form name="signup_form" method="post" action="" autocomplete="off">
        <h2 class="heading">Sign Up Form</h2>

        <label>First Name</label>
        <input type="text" name="first_name" class="input-control" placeholder="Your first name">

        <label>Last Name</label>
        <input type="text" name="last_name" class="input-control" placeholder="Your last name">

        <label>Email</label>
        <input type="text" name="email" class="input-control" placeholder="Your email address">

        <label>New Password</label>
        <input type="password" name="password" class="input-control">

        <input type="submit" name="submit" class="button" value="Signup Now For FREE">
    </form>
    <hr>
    <div>By clicking Sign Up, you are indicating that you have read and agree to the <a href="#" target="_blank"><u>Terms of Use</u></a> and <a href="#" target="_blank"><u>Privacy Policy</u></a>.</div>
</div>
<!-- Form End -->


</body>
</html>