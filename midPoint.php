<!DOCTYPE html>
<html>
    <head>
        <title>Mid point of two numbers</title>
        <link rel="stylesheet" type="text/css" href="project1.css">
    </head>
    <body>
        <h2> Mid Point of two numbers: </h2>
        <h3>The midpoint of two points in a two-dimensional space is the point that lies exactly halfway between the two given points. </h3>
    <center><img src="midPoint.jpg" width="450px" height="250px"><br><br>
        <form action="midPoint.php" method="post">
            <label style="color: white">Enter First point:</label><br><br>
            <input type="text" name="first" id="first"><br>
            <label style="color: white">Enter Second point:</label><br><br>
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
    if(is_numeric($x[0])&& is_numeric($x[1])&&is_numeric($y[0])&& is_numeric($y[1])){
        echo "<h3><center>Mid point is : </center></h3>";
        echo "<h3><center>(".(float)(($x[0]+$y[0])/2).",".(float)(($x[1]+$y[1])/2).")</center></h3>";
    }
    else{
        echo "<h3><center>Enter numbers only...</center></h3>";
    }
    
}
?>