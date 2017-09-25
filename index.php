
<style>
html, body{
    padding: 0;
    margin: 0;
}
.star{
    font-size: 30px;
}
.wrapper{
    min-width:600px;
    width:800px;
    margin: 0 auto;
    border: 1px solid #eaeaea;
}

h3{
    background:#ccc;
    height:50px;
    line-height: 50px;
    color: #333;
    margin-left:-5px;
    padding-left: 5px;
}
.content{
    background: #333;
    color:#ccc;
    padding:0 0 15px 5px;
    
    
}
h1{
    text-align:center;
    font-size:3em;
}
</style>
<?php
//Questions 
//1) Sum of Digits
function sum($arg = array()){
    $t = 0;
    if(isset($arg) && !empty($arg)){
        for($i=0;$i<sizeof($arg);$i++){
            $t +=$arg[$i];
        }
        return $t;
    }else{
        return 0;
    }
}

//2) Even or Odd Number
function evenOdd($arg = array()){
    $isEvenSeries = true;
    if(isset($arg) && !empty($arg)){
        for($i=0;$i<sizeof($arg);$i++){
            if($arg[$i] % 2 !== 0){
                $isEvenSeries = false;
                break;
            }
        }
        
    }

    if($isEvenSeries){
        return 'even number';
    }else{
        return 'odd number';
    }
}

//3) Prime Numbers
function prime($arg = array()){
    $isPrimeSeries = true;
    if(isset($arg) && !empty($arg)){
        for($i=0;$i<sizeof($arg);$i++){
            $cof = 0;// count of factors 
            for($j=1;$j<=$arg[$i];$j++){
                if($arg[$i] % $j === 0){
                    $cof++;
                }
            }
            $isPrimeSeries = ($cof>2 || $cof===1?false:true);     
            if(!$isPrimeSeries){
                break;
            }      
        }
    }
   if($isPrimeSeries){
       return 'prime number';
   }else{
       return 'not prime number';
   }
    
}

//4) Table Of Numbers
function tableOfNumber($num){
    for($i=1; $i<=10;$i++){
        echo $i * $num.' ';
    }
}

//5) Factorial
function factorial($n){
    $x = 1;

    for($i=1;$i<$n; $i++){
        $x*=($i+1);
    }
    return (string)($x);
}

//6) Armstrong Number
function armstrongNumber($num){
    $temp = $num;
    $sum = 0;
    while($temp !=0){
        $singles = $temp % 10;
        $sum += $singles*$singles*$singles;
        $temp = (int)($temp/10);
    }
    if($sum===$num){
        return 'armstrong' ;
    }else{
        return 'not armstrong';
    }
    
   
}

//7) Palindrome Number
function palindrome($num){
    $temp = $num;
    $new = '';
    while($temp !=0){
        $unit = $temp % 10;
        $new .= $unit;
        $temp = (int)($temp/10);
    }

    if($num==$new){
        return 'palindrome number';
    }else{
        return 'not palindrome number';
    }
}

//8) Fibonacci Series
function fibaonacciSeries($limit){
    $fn = 0;//first number
    $sn = 1;//second number
    $nt = 0;//next term

    for($i = 1; $i<=$limit; $i++){
        echo $fn.' ';
        $nt = $fn + $sn;
        $fn = $sn;
        $sn = $nt;

    }
}

//9) Reverse Number
function reverseNumber($num){
    $temp = $num;
    $reverse = '';
    while($temp != 0){
        $reverse .= $temp % 10;
        $temp = (int)($temp/10);
    }
    return $reverse;
}

//10) Reverse String
function reverseString($str){
    $strlen = strlen($str) - 1;
    $newStr = '';
    
    for($i = $strlen; $i >=0; $i--){
        $newStr .= $str[$i];
    }
    return $newStr;
}

//11) Swap two Numbers
function numberSwaper(&$a, &$b){
    $c[0] = $a;
    $c[1] = $b;
    
    $a = $c[1];
    $b = $c[0];
}

//12) Adding Two Numbers
function addTwoNumbers($num1, $num2){
    return $num1 + $num2;
}

//13) Subtracting Two Numbers
function subtractTwoNumbers($num1, $num2){
    return $num1 - $num2;
}

//14) Area of Triangle
function areaOfTriangle($base, $height){
    return ($base/2) * $height;
}

//15) Area of Rectangle
function areaOfRectangle($length, $width){
    return $length * $width;
}

/**
 * 16) Leap Year
 * Accept an int of any given year 
 * @return string one of two options {Leap Year, Not leap Year}
 */
function leapYear($year){
    $leap  = ($year % 4);
    if($leap === 0){
        return 'Leap Year';
    }else{
        return 'Not Leap Year';
    }
}

/**
 * 17) Alphabet Triangle using PHP method
 */
function  alphaTriangle($dept){
    $alpha = range('A', 'Z');  
    $center = (int)($dept-1);
      
    for($i=0; $i<$dept; $i++){  
        $start = $center - $i; $stop = $center + $i; $x = 0;
      for($j=0; $j<=$stop; $j++){ 
            if($j>=$start && $j <$center){
                echo $alpha[$x];
                $x++; 
            }else if($j>=$center){
                echo $alpha[$x];
               $x--;
                //
            }else{
                echo str_repeat("&nbsp",3);
            }
        }  
        echo "<br>";  
    }  
}

/**
 * 19) Number Triangle
 *
 */
 function numberTriangle($dept){
     $seqRange = range(1,$dept);
     $center = (int)($dept-1);
     
   for($i=0; $i<$dept; $i++){  
       $start = $center - $i; $stop = $center + $i; $x = 0;
     for($j=0; $j<=$stop; $j++){ 
           if($j>=$start && $j <$center){
               echo $seqRange[$x];
               $x++; 
           }else if($j>=$center){
               echo $seqRange[$x];
              $x--;
               //
           }else{
               echo str_repeat("&nbsp",2);
           }
       }  
       echo "<br>";  
   }  
 }

/**
 * 20) Star Triangle
 * This function will print four(4) different star shapes base on the option given 
 * @param $dept this is how much rows of star is use to make the shape
 * @param $shape This option allow users to choose the shape they want to create from the following list 
 * ['right-angle-ud','right-angle-ru', 'diamond', 'arrow' ] shape is set at default ['right-side-ru']
 * therefore if no shape is given the function will ouput the default shape. 
 */
 function starTriangle($dept, $shape = "right-angle-ru" ){
    $star = '*';
   

    switch($shape){
        case 'right-angle-ud':
            $level = $dept;
            for ($i=0; $i < $dept; $i++) {    
                echo '<div class="star">';    
                for ($j=0; $j < $level; $j++) { 
                    echo $star;
                }
                $level -= 1;
                echo '</div>';
            }
   
        break;

        case 'right-angle-ru':
            $level = 1;
            for ($i=0; $i < $dept; $i++) {    
                echo '<div class="star">';    
                for ($j=0; $j < $level; $j++) { 
                    echo $star;
                }
                $level += 1;
                echo '</div>';
            }
        break;

        case 'arrow':
        $level = 1;
        $center = (int)($dept/2);
        for ($i=0; $i < $dept; $i++) {    
            echo '<div class="star">';    
            for ($j=0; $j < $level; $j++) { 
                echo $star;                
            }
            if($i<$center){                
                $level ++;
            }else{               
                $level--;
            }
            echo '</div>';
        }
    break;

    case 'diamond':
    $level = 1;
    $center = (int)($dept/2);
    $start = $center - 1; $stop = $center + 1;

    for ($i=0; $i < $dept; $i++) {    
        echo '<div class="star">';  
        
        for ($j=0; $j < $level; $j++) { 

                echo $star;
        
        }
       
        if($i<$center){
            $level ++;
           
        }else{
            
            $level--;
        }        
        echo '</div>';
    }
break;
    }//end of switch($shape)
 }


/**************************************************************************
                    
                ANSWERS USED FROM THE METHODS ABOVE 

***************************************************************************/

echo '<div class="wrapper">';
echo "<h1>Class Activity</h1>";
//1) Sum Digits
echo '<div class="content">';
echo '<h3>1). Sum Digits</h3>';
echo 'Write a PHP program to print sum of digits.<br/><br>';
echo '<b>Input:</b> 2, 3<br>';
echo '<b>Output: </b>'.sum(array(2,3)); //print 5
echo '<br><br>';

echo '<b>Input:</b> 6, 2, 4<br>';
echo '<b>Output: </b>'.sum(array(6,2,4)); //print 12
echo '</div>';

//2) Even or Odd Number
echo '<div class="content">';
echo '<h3>2). Even or Odd Number</h3>';
echo '<b>Input:</b> 2, 3<br>';
echo '<b>Output: </b>'.evenOdd(array(2,3)); //print odd number
echo '<br><br>';

echo '<b>Input:</b> 0, 2<br>';
echo '<b>Output: </b>'.evenOdd(array(0,2)); //print even number
echo '</div>';

//3) Prime Numbers
echo '<div class="content">';
echo '<h3>3). Prime Numbers</h3>';
echo 'Write a PHP program to check prime number.<br/><br>';
echo '<b>Input: </b> 1, 7<br><b>Output:</b> '.prime(array(1,7));//print not prime number
echo '<br><br>';

echo '<b>Input: </b> 5, 7<br><b>Output:</b> '.prime(array(5,7));//print prime number
echo '</div>';

//4) Table of Number
echo '<div class="content">';
echo '<h3>4). Table of Number</h3>';
echo 'Write a PHP program to print table of a number.<br/><br>';
echo '<b>Input: </b> 2<br>';
echo '<b>Output:</b> '; //print 2 4 6 8 10 12 14 16 18 20
tableOfNumber(2);
echo '<br><br>';

echo '<b>Input: </b> 5<br>';
echo '<b>Output:</b> '; //print 5 10 15 20 25 30 35 40 45 50
tableOfNumber(5);
echo '</div>';

//5) Factorial
echo '<div class="content">';
echo '<h3>5). Factorial</h3>';
echo 'Write a PHP program to print factorial of a number.<br/><br>';
echo '<b>Input:</b> 5<br>';
echo '<b>Output:</b> '.factorial(5); //Print 120
echo '<br><br>';

echo '<b>Input:</b> 6<br>';
echo '<b>Output:</b> '.factorial(6); //Print 720
echo '</div>';


//6) Armstrong Number
echo '<div class="content">';
echo '<h3>6). Armstrong Number</h3>';
echo 'Write a PHP program to check armstrong number.<br/><br>';
echo '<b>Input:</b> 371<br>';
echo '<b>Output:</b> '.armstrongNumber(371); //Print armstrong
echo '<br><br>';

echo '<b>Input:</b> 342<br>';
echo '<b>Output:</b> '.armstrongNumber(342); //Print not armstrong
echo '</div>';

//7) Palindrome Number
echo '<div class="content">';
echo '<h3>7). Palindrome Number</h3>';
echo 'Write a PHP program to check armstrong number.<br/><br>';
echo '<b>Input:</b> 121<br>';
echo '<b>Output:</b> '.palindrome(121); //Print palindrome number
echo '<br><br>';

echo '<b>Input:</b> 113<br>';
echo '<b>Output:</b> '.palindrome(113); //Print not palindrome number
echo '</div>';

//8) Fibonacci Series
echo '<div class="content">';
echo '<h3>8). Fibonacci Series</h3>';
echo 'Write a PHP program to print fibonacci series without using recursion and using recursion.<br/><br>';
echo '<b>Input:</b> 10<br>';
echo '<b>Output:</b> ';
fibaonacciSeries(10); //Print 0 1 1 2 3 5 8 13 21 34
echo '</div>';

//9) Reverve Number
echo '<div class="content">';
echo '<h3>9). Reverse Number</h3>';
echo 'Write a PHP program to reverse given number.<br/><br>';
echo '<b>Input:</b> 234<br>';
echo '<b>Output:</b> '.reverseNumber(234); //Print 432
echo '</div>';

//10) Reverve String
echo '<div class="content">';
echo '<h3>10). Reverse String</h3>';
echo 'Write a PHP program to reverse given string.<br/><br>';
echo '<b>Input:</b> amit<br>';
echo '<b>Output:</b> '.reverseString('amit'); //Print tima
echo '</div>';

//11) Swap Two Numbers
echo '<div class="content">';
echo '<h3>11). Swap Two Numbers</h3>';
echo 'Write a PHP program to swap two numbers with and without using third variable.<br/><br>';
echo '<b>Input:</b> a=5 b=10<br>';
$a = 5; $b = 10;
echo '<b>Output:</b> '.numberSwaper($a, $b); 
echo 'a = '.$a.' b = '.$b;
echo '</div>';

//12) Adding Two Numbers
echo '<div class="content">';
echo '<h3>12). Adding Two Numbers</h3>';
echo 'Write a PHP program to add two numbers.<br/><br>';
echo '<b>First Input:</b> 10<br>';
echo '<b>Second Input:</b> 20<br>';
echo '<b>Output:</b> '.addTwoNumbers(10,20); 
echo '</div>';

//13) Subtracting Two Numbers
echo '<div class="content">';
echo '<h3>13). Subtracting Two Numbers</h3>';
echo 'Write a PHP program to subtract two numbers.<br/><br>';
echo '<b>First Input:</b> 50<br>';
echo '<b>Second Input:</b> 10<br>';
echo '<b>Output:</b> '.subtractTwoNumbers(50,10); 
echo '</div>';

//14) Area of Triangle
echo '<div class="content">';
echo '<h3>14). Area of Triangle</h3>';
echo 'Write a PHP program to find the area of triangle.<br/><br>';
echo '<b>Base Input:</b> 10<br>';
echo '<b>Height Input:</b> 15<br>';
echo '<b>Output:</b> '.areaOfTriangle(10,15); 
echo '</div>';

//15) Area of Rectangle
echo '<div class="content">';
echo '<h3>15). Area of Rectangle</h3>';
echo 'Write a PHP program to find the area of rectangle.<br/><br>';
echo '<b>Length Input:</b> 10<br>';
echo '<b>Width Input:</b> 20<br>';
echo '<b>Output:</b> '.areaOfRectangle(10,20); 
echo '</div>';

//16) Area of Rectangle
echo '<div class="content">';
echo '<h3>16). Leap Year</h3>';
echo 'Write a PHP program to find if the given year is leap or not.<br/><br>';
echo '<b>Input:</b> 2000<br>';
echo '<b>Output:</b> '.leapYear(2000); 
echo '<br>';

echo '<b>Input:</b> 2001<br>';
echo '<b>Output:</b> '.leapYear(2001); 
echo '</div>';


//17) Alphabet Triangle using PHP Method
echo '<div class="content">';
echo '<h3>17).  Alphabet Triangle using PHP Method</h3>';
echo 'Write a PHP program to print alphabet triangle.<br/><br>';
echo '<b>Output:</b><br> ';
alphaTriangle(5);
echo '</div>';


//18) Alphabet Triangle Pattern
echo '<div class="content">';
echo '<h3>18).  Alphabet Triangle Pattern</h3>';
echo 'Write a PHP program to print alphabet triangle.<br/><br>';
echo '<b>Output:</b> <br>';
alphaTriangle(6);

echo '</div>';


//19) Number Triangle 
echo '<div class="content">';
echo '<h3>19).  Number Triangle</h3>';
echo 'Write a PHP program to print number triangle.<br/><br>';
echo '<b>Output:</b> <br> ';
numberTriangle(6);
echo '</div>';


//20) Star Triangle 
echo '<div class="content">';
echo '<h3>20).  Star Triangle </h3>';
echo 'Write a PHP program to print star triangle.<br/><br>';
echo '<b>Output:</b> <br>';
starTriangle(5, "right-angle-ud");
echo '<br><br>';

echo '<b>Output:</b> <br>';
starTriangle(5);
echo '<br><br>';

echo '<b>Output:</b> <br>';
starTriangle(9, "diamond");
echo '<br><br>';

echo '<b>Output:</b> <br>';
starTriangle(9, "arrow");
echo '</div>';

echo '</div>';

?>
