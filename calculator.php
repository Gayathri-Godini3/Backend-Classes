<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <link rel="stylesheet" href="cal.css">
    </head>
    <body>
        <div class="calculator">
            <div class="input-output">
                <form action="calculator.php" method="GET">
                    <input type="text" name="exp" id="output" readonly>  
                </form>
            </div>
            <div class="buttons">
            <button onclick="appendInput('7')">7</button>
            <button onclick="appendInput('8')">8</button>
            <button onclick="appendInput('9')">9</button>
            <button onclick="appendInput('/')">/</button>
            <button onclick="appendInput('4')">4</button>
            <button onclick="appendInput('5')">5</button>
            <button onclick="appendInput('6')">6</button>
            <button  onclick="appendInput('*')">x</button>
            <button onclick="appendInput('1')">1</button>
            <button onclick="appendInput('2')">2</button>
            <button onclick="appendInput('3')">3</button>
            <button onclick="appendInput('+')">+</button>
            <button onclick="appendInput('(')">(</button>
            <button onclick="appendInput('0')">0</button>
            <button onclick="appendInput('.')">.</button>
            <button onclick="appendInput('-')">-</button>
            <button onclick="appendInput(')')">)</button>
            <button onclick="appendInput(',')">,</button>
            <button onclick="appendInput('sin(')">sin</button>
            <button onclick="appendInput('cos(')">cos</button>
            <button onclick="appendInput('tan(')">tan</button>
            <button onclick="appendInput('log(')">log</button>
            
            <button onclick="appendInput('exp(')">exp</button>
            <button onclick="appendInput('pow(')">pow</button>
            <button onclick="appendInput('abs(')">abs</button>
            <button onclick="appendInput('sqrt(')">sqrt</button>
            <button onclick="removeLastChar()">←</button>
            <button class="clearInput" onclick="clearInput()">C</button>
            <button type="submit" id="equalsBtn" onclick="submitForm()">=</button>
            </div>
            
        </div>
        <script src="cal.js"></script>
        
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['exp'])) {
    $exp = $_GET['exp'];
    $result = evaluateExpression($exp);
    echo "<script>document.getElementById('output').value = '$result';</script>";
}

function evaluateExpression($exp) {
    try {
        
        $result = eval("return $exp;");
        return $result;
    } catch (Throwable $e) {
        return "Error";
    }
}
?>
