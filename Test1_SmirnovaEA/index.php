<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Создаем форму для ввода количества выводимых чисел -->
        <form name = "form" action="" method="post">
       Сколько вывести чисел?  <input type = "text" name = "number" /> 
        <input type="submit" value="Ok" />
        </form>
        <?php
        include 'div_func.php';
         devision();
        ?>
    </body>
</html>
