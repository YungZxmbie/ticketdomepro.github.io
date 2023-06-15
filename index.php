<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Dome to send email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if(!empty($_POST["send"])){
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userSchool = $_POST["userSchool"];
    $toEmail = "sanelemdumata98@gmail.com";

    $mailHeaders = "Name: " . $userName .
    "\r\n Email: " . $userEmail .
    "\r\n Phone: " . $userEmail .
 
    if(mail($toEmail, $userName, $mailHeaders)){
        $message = "You Have Successfully Purchased a ticket, an Email will be sent with your ticket code."
    }
}
?>

<div class="form-container">
            <form method="post" name="emailContact">
                <div class="input-row">
                   <label>Name <em>*</em></label>
                   <input type="text" name="userName" required> 
                </div>
                <div class="input-row">
                    <label>Email <em>*</em></label>
                    <input type="text" name="userEmail" required> 
                 </div>
                 <div class="input-row">
                    <label>Phone <em>*</em></label>
                    <input type="text" name="userPhone" required> 
                 </div>
                 <div class="input-row">
                    <label>School <em>*</em></label>
                    <input type="text" name="userSchool" required> 
                 </div>
                 <div class="input-row">
                    <input type="submit" name="send" value="submit"> 
                    <?php if(!empty($message)){ ?>
                    <div class="success">
                        <strong><?php echo $message; ?></strong>
                    </div>
                    <?php } ?>
                 </div>
            </form>
        </div>

</body>
</html>