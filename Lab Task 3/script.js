let display = document.getElementById("displayText");
let buttons = document.querySelectorAll("#buttons button");

let currentInput = "";

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let value = button.innerText;

        if (value === "C") {
            currentInput = "";
            display.innerText = "0";
        }
        else if (value === "=") {
            try {
                currentInput = eval(currentInput).toString();
                display.innerText = currentInput;
            } catch {
                display.innerText = "Error";
                currentInput = "";
            }
        }
        else {
            currentInput += value;
            display.innerText = currentInput;
        }
    });
});