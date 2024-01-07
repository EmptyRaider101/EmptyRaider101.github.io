<title>Mailing...</title>
<link rel="shortcut icon" href="Logo.ico"/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
	$name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
	$number = htmlspecialchars($_POST["number"]);

    // Set up email parameters
    $to = "Wil.code.business@gmail.com";
    $subject = $name . " | " . $number . " | " . $email;
    $headers = "From: wilsportfoliocontact@gmail.com";

    // Send email
    mail($to, $subject, $message, $headers);
}

header("Location: contact.php");
?>
