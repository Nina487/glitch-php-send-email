<form method="post" action="contact.php">
    <input type="text" name="mailTo" placeholder="destination email"><br><br>
    <input type="text" name="subject" placeholder="Subject"><br><br>
    <input type="text" name="body" placeholder="E-mail body"><br><br>
    <button type="submit">Send</button>
</form>

<br>
<br>
You need a local webserver to be able to run PHP scripts (e.g XAMPP). If you don't have a local webserver I'll help you configure one.
<br>
This example is made to work with gmail (your own mail has to be gmail, destination can be anything else)
<br>
Everything important is commented in the contact.php file.
<br>
To get this work, you need to replace $mail->Username, $mail->Password, $mail->setFrom('youEmail@gmail.com') variables in contact.php with you own data.<br>
For implementing this to your project, you need to copy the PHPMailer folder and put it in the same directory as the file where the email sending script is !!!IMPORTANT!!!<br><br>
To implement php code to your website you can just try to make it identical like this example project. Two files: one with a form and a submit button, second file with sending mail script. Method="post" and action="contact.php"(your script filename) in the form are very important.