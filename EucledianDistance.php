<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="project1.css">
    </head>
<body>


<h2>Euclidean Distance :</h2>
<h3>The Euclidean distance between two points in a two-dimensional space (such as on a plane) is calculated using the distance formula, derived from the Pythagorean theorem. </h3>
<center><img src="ed1.jpg" width="550px" height="350px" "><br><br>

<form action="EucledianDistance.php" method="post">
    <label for="fname">Enter first point:</label><br><br>
  <input type="text" id="first" name="first" ><br>
  <label for="lname">Enter second point:</label><br><br>
  <input type="text" id="second" name="second" ><br><br>
  <input type="submit" value="Submit">
</form> 
</center>

</body>
</html>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>    
<?php
if(!empty($_POST)){
    $first = $_POST['first'];
    $second = $_POST['second'];
    
    $first = htmlspecialchars($first);
    $second = htmlspecialchars($second);
    
    $x = explode(",",trim($first,'()'));
    
    //$m = trim($second,'()');
    $y = explode(",",trim($second,'()'));
    if(is_numeric($x[0])&& is_numeric($x[1])&&is_numeric($y[0])&& is_numeric($y[1])){
        echo "<br><h3><center>Euclidean Distance is : </center></h3>";
        echo "<center><h3>".sqrt( pow( ($x[1]-$x[0]),2) + pow( ($y[1]-$y[0]),2) )."</h3></center>";
    }
    else{
        echo "<br><h3><center>Enter numbers only</center></h3>";
    }
    
}
?>