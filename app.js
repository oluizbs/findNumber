let limitInput = () => {
    let input = document.querySelector("#numberInput");
    
    if (input > 10) {
        input  = 10;
    } else if (input < 1) {
        input = 1;
    }
};

function enviaParaPHP(){document.querySelector("#submit").addEventListener("click", () => {
    let numberUser = document.getElementById("numberUser").value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "teste1.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").textContent = xhr.responseText;
        }
    };
    xhr.send("numberUser=" + numberUser);

})};