<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <style>
        form{
        background-color:lightblue;
        padding:50px;
        border-radius:20px;
        max-width: 400px;
        margin: auto;
        }
        input[type="submit"] {
        background-color:green;
        color: white;
        padding: 10px;
        border:none;
        border-radius: 4px;
        font-size: 16px;
        width: 100%;
    }
  
input[type="text"]
{
    width: 100%;
    padding: 10px;
    border:none;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type="email"]
{
    width: 100%;
    padding: 10px;
    border:none;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea
{
    width: 100%;
    padding: 10px;
    border:none;
    border-radius: 4px;
    box-sizing: border-box;
    height:100px;
}

    </style>

<form id="contactform">
    <p><input name="Name" type="text" placeholder="Name" required/></p>
    <p><input name="Email" type="email" placeholder="Email" required/></p>
    <p><textarea name="message" placeholder="Message" required></textarea></p>
    <div class="g-recaptcha" data-sitekey="6Ldsv0oqAAAAALiaJUmeI3JML_G-vFLXAWbqrXLG"></div>
    <p><input type="submit" value="Send" /></p>
</form>

<script>
    document.getElementById('contactform').addEventListener('submit', function(event) {
        // Get reCAPTCHA response
        var recaptchaResponse = grecaptcha.getResponse();

        // Check if the reCAPTCHA is completed
        if (!recaptchaResponse) {
            event.preventDefault();
            alert("Please complete the reCAPTCHA."); // Alert the user
        }
        else{
            alert("message sent successfully")
        }
    });
</script>
</body>
</html>
