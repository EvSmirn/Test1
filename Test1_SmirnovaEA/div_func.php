<?php
function devision()
{
        if (isset($_POST['number']))
    {
       $N = $_POST['number']; 
       if ((!empty($N))&&(ctype_digit($N)))
      {
       $number = 0; 
       $arr= array(); 
       $i=0; 
 
       while (count($arr)<$N) 
       {
         
           $v = strlen($number); //количество разрядов числа
           
           if ($number%$v==0)
           {
           $arr[$i] = $number; 
           $i++; 
            } 
            
            $number++; 
       }

    $str = implode(', ', $arr); 
  
    echo $str; //вывод строки
   
       }
       else {  
           echo "<div style=\"font:bold 18px Arial; color:red;\"> Введите целое число!";
            }
    }
}
        

