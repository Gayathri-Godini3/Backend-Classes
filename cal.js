function clearInput(){
    document.getElementById('output').value='';
}
function appendInput(value){
    document.getElementById('output').value+=value;
}
function removeLastChar(){
    var curValue = document.getElementById('output').value;
    document.getElementById('output').value=curValue.slice(0,-1);
}

function submitForm(){
    document.forms[0].submit();
}