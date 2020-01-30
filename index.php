<?php
include "helpers.php";
?>


<!doctype html>
<html lang="en">
<head>
    <?php render('templates/head.php', ['title' => 'My page']) ?>
</head>
<body>

<?php

$data = $_GET["name"];
if($data == null)
    render("templates/form.php");
else
    render("templates/message.php", ["name" => $data]);
?>

</body>
</html>
