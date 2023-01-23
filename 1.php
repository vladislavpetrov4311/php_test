<?php 
$connect = mysqli_connect('localhost' ,  'root' , '', 'myapp');

$result = $connect->query('SELECT * FROM `forma`'); // запрос на выборку
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
     echo $row['zone']  ;// выводим данные
     echo "<br/>";
    
}


?>