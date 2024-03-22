<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="project1.css">

    </head>
<body>

<h2>Mathematical Expression Evaluation</h2>

<p>Enter your mathematical expression in the following format: operand1 operator operand2</p>
<p>Supported operators: +, -, *, /</p>

<form action="project1.php" method="get">
    <label for="exp" style="color: white">Enter Expression:</label><br><br>
  <input type="text" id="exp" name="exp" ><br><br>
  <input type="submit" value="Submit">
</form> 

<?php
if(isset($_GET['exp'])) {
    $exp = $_GET['exp'];
    
    if(preg_match('~^[0-9+\-*/\s]+$~', $exp)) {

        $exp = preg_replace('~[^0-9+\-*/\s]~', '', $exp);
         try {
            $result = eval("return ($exp);");
            if($result !== false){
                echo "<br><h3><center>Result: $result</center></h3>";
            } else {
                throw new Exception("<br><h3><center>Invalid expression</center></h3>");
            }
        } catch (Throwable $ex) {
            echo "<br><h3><center>Error: </center></h3>" . $ex->getMessage();
        }
    } else {
        echo "<br><h3><center>Error: Invalid characters in expression. Please use only digits, '+', '-', '*', '/', and spaces.</center></h3>";
    }
}
?> 

</body>
</html>
