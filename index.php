<meta charset="UTF-8">
<form name="forma" action="index.php" method="post">
 Исходящие: <input type="text" name="name"><br />
<input name="submit" type="submit" value="Отправить"> 
<br/>
 Входящие: мне тоже, а кому сейчас легко ?<br />
</form>


<?php

$connect = mysqli_connect('localhost' ,  'root' , '', 'myapp');

$name = $_POST['name'];
//$email = $_POST['email']; 

$result = mysqli_query($connect , "INSERT INTO `myapp`.`forma` ( `zone`) VALUES ( '$name');");
if ($result) {
   // echo "Данные успешно сохранены!";
}



?>