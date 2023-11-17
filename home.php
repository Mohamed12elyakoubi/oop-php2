<?php 

include('db.php');
$conn = new Database();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $conn->addUser($_POST['name'], $_POST['pass']);
        echo '<div class="message" style="text-align: center; font-size:30px; color: green;"  onclick="this.remove();">' . "User is succesvol toegevoegd" . '</div>';
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
<h1>User toevoegen</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Naam" required> <br>
        <input type="password" name="pass" placeholder="password" required> <br>
        <input type="submit">
    </form>  
</body>
</html>