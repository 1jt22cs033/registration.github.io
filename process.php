<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $message = htmlspecialchars($_POST['message']);

  echo "<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Submission Success</title>
    <link rel='stylesheet' href='styles.css'>
  </head>
  <body>
    <header>
      <h1>Submission Successful</h1>
    </header>
    <main>
      <h2>Your Submitted Information:</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Phone:</strong> $phone</p>
      <p><strong>Gender:</strong> $gender</p>
      <p><strong>Message:</strong> $message</p>
      <a href='index.html'>Go Back</a>
    </main>
  </body>
  </html>";
}
?>
