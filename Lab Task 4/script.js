function details(){
    let text = document.querySelector("#text-input").value;
    console.log(text.split(" ").length);
    document.querySelector("#char-count").innerText = text.length;
    document.querySelector("#word-count").innerText = text.split(" ").length;
    document.querySelector("#reversed-text").innerText = text.split("").reverse().join("");
}

document.querySelector("#analyze-btn").addEventListener("click", details);