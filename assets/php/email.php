
<?php
if(isset($_POST['submit'])) {
$to = "rapple3011@gmail.com";
$subject = $_POST['subject'];
$name_field = $_POST['name_field'];
$email_field = $_POST['email_field'];
$phone_field = $_POST['phone_field'];
$message = $_POST['message'];

$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";

echo "Data has been submitted to $to!";
mail($to, $subject, $name_field, $email_field, $phone_field, $message);
} else {
echo "blarg!";
}
?>
