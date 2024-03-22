<!DOCTYPE html>
<html>
    <head>
        <title>Mid point of two numbers</title>
    </head>
    <body>
        <h2> Slope of line passing through two points: </h2>
        
    <center><img src="slopeOf2points.jpg" width="450px" height="250px"><br><br>
        <form action="slopeOf2points.php" method="post">
            <label>Enter First point:</label><br>
            <input type="text" name="first" id="first"><br>
            <label>ENter Second point:</label><br>
            <input type="text" name="second" id="second"><br><br><!-- comment -->
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
    $y = explode(",",trim($second,'()'));
    print_r($x);
    print_r($y);
    if(is_numeric($x[0])&& is_numeric($x[1])&&is_numeric($y[0])&& is_numeric($y[1])){
        echo "Slope of the line passing through the given two points is : ";
        //echo "(".(float)(($x[0]+$y[0])/2).",".(float)(($x[1]+$y[1])/2).")";
        echo ($y[1]-$x[1])/($y[0]-$x[0]);
    }
    else{
        echo "Enter numbers only...";
    }
}
?>