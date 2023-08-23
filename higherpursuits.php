<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Higher Pursuits Contact Form</title>
     </head>
     <body>
          <h1 style="font-family: sans-serif">You've Reached Out to Us.</h1>

          <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];


            $to = 'davebowerman@me.com';
            $subject = 'Higher Pursuits Message';
            $msg = "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Message: $message\n";



            mail($to, $subject, $msg, 'From:' . $email);

            echo '<b style="font-family: sans-serif">Here is what we have received from you:</b><br />';
            echo '<br />';
            echo '<font face="sans-serif">Your name is ' . $name . '.' . '<br />';
            echo '<font face="sans-serif">Your email is ' . $email . '.' . '<br />';
            echo '<font face="sans-serif">Your phone is ' . $phone . '.' . '<br />';
            echo '<font face="sans-serif">Your message to us is: ' . $message . '<br />';
            echo '<br />';
            echo '<b style="font-family: sans-serif">We will be in touch shortly. Thank you!</b>';

          ?>

     </body>
</html>
