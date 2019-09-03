<?php
if (!isset($_POST["submit"]))
  {
  ?>
  <!-- <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> -->
  <!-- From: <input type="text" name="from"><br> -->
  <!-- Subject: <input type="text" name="subject"><br> -->
  <!-- Message: <textarea rows="10" cols="40" name="message"></textarea><br> -->
  <!-- <input type="submit" name="submit" value="Click To send mail">
  </form> -->
  <?php
  }

else

  {

  if (isset($_POST["email"]))
    {
    $from = $_POST["email"]; // sender
    $subject = $_POST["Website Notification"];
    $message = $_POST["email"];

    $message = wordwrap($message, 70);

    mail("info@joinery-direct.com",$subject,$message,"From: $from\n");
    echo "Thank you for subscribing";
    }
  }
?>