<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー選択</title>
</head>
<body>
<form action="Acourse.php" method="POST">
		<input type="submit" value="Aコース">
    <input type="hidden" name="id" value="<?=$row['aidle_no']?>">

    <form action="update_member.php" method="POST">
		<input type="submit" value="Bコース">
    <input type="hidden" name="id" value="<?=$row['aidle_no']?>">

    <form action="update_member.php" method="POST">
		<input type="submit" value="Cコース">
    <input type="hidden" name="id" value="<?=$row['aidle_no']?>">
</body>
</html>