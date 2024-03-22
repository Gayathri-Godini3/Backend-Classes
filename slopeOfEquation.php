<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="project1.css">
    </head>
<body>

<h2>Slope of a line</h2>
<h2> ax+by+c=0 and ax+by=c and y=ax+b and y=ax  <br> slope = -b/a <h2>

<form action="slopeOfEquation.php" method="post">
    <label for="fname" style="color: white">Enter Line Equation:</label><br>
  <input type="text" id="first" name="first" ><br>
  
  <input type="submit" value="Submit">
</form> 


</body>
</html>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>
<?php
if(!empty($_POST)){
    $x = $_POST['first'];
    $terms = explode("=",$x);
$left = explode("+",$terms[0]);
$right = explode("+",$terms[1]);
$x_coeff = null;
$y_coeff = null;
$slope = null;

if($terms[0]==='y'){
    if (strpos($right[0], 'x') === false) {
        
        $slope = $right[0];
    } else {
        
        $slope = trim($right[0],'x');
    }
    echo "Slope is ".$slope;
}
else{
    foreach ($left as $term){
    if(strpos($term,'x')!==false){
        $x_coeff = trim($term,'x');
    }
    elseif(strpos($term,'y')!==false){
        $y_coeff = trim($term,'y');
    }
    }
    echo "X coefficient is ".$x_coeff."<br>";
    echo "Y coefficient is ".$y_coeff."<br>";

    $slope = -$y_coeff/$x_coeff;
    echo "Slope is ".$slope;
}
 
}

?>