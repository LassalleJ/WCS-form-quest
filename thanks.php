<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $fNameErr=$lNameErr=$emailErr=$phone=$message='';
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_firstname"])) {
            echo ($fNameErr = "Name is required");
        } else if (empty($_POST["user_lastname"])) {
            echo ($lNameErr = "Name is required");
        } else if ((empty($_POST["user_email"]))||(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL))) {
            echo ($emailErr = "A valid email is required");
        } else if (empty($_POST["user_phone"])) {
            echo ($phoneErr = "Phone number is required");
        } else if (empty($_POST["user_message"])) {
            echo ($message = "Message is required");
        } else {
            $fName = test_input($_POST["user_firstname"]);
            $email = test_input($_POST["user_email"]);
            $lName = test_input($_POST["user_lastname"]); 
            $phone = test_input($_POST["user_phone"]);
            $message = test_input($_POST["user_message"]);
            echo ('Merci '.$fName.' '.$lName.' de nous avoir contacté à propos de '. $_POST['subjects'].'.');
            echo ('<br>');
            echo ('Un de nos conseillers vous contactera soit à l\'adresse '.$email.' ou par téléphone au '.$phone. 
    ' dans les plus brefs délais pour traiter votre demande : <br><br>'. $message);


         
        }
      }


    
    ?>
</body>
</html>
