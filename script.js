document.addEventListener("DOMContentLoaded", function() {
    var num1Input = document.getElementById("num1");
    var num2Input = document.getElementById("num2");
    var form = document.getElementById("calculatorForm");

    form.addEventListener("submit", function(event) {
        if (!isValidNumber(num1Input.value) || !isValidNumber(num2Input.value)) {
            alert("Por favor, insira apenas números nos campos.");
            event.preventDefault();
        }
    });

    function isValidNumber(value) {
        return !isNaN(value) && parseFloat(value) == parseInt(value, 10);
    }
});
