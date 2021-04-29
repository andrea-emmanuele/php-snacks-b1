<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if (strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && is_numeric($age)) {
        echo "Accesso riuscito!";
    }
    else {
        echo "Accesso negato!";
    }
    echo "<br><br>";
?>

<form action="index.php" method="get">
    <input name="name" type="text" value="Andrea">
    <input name="email" type="text" value="example@gmail.com">
    <input name="age" type="text" value="10">
    <input type="submit" value="Accedi">
</form>
