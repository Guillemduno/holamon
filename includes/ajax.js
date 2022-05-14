
// S'obté l'idioma del navegador i s'extreuen els dos primers caràcters.
let lang = window.navigator.userLanguage || window.navigator.language;
let idioma = lang.substring(0,2);


// Petició Ajax que envia l'idioma del navegador per GET.
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("text").innerHTML = this.responseText;
        document.getElementById("text").classList.add("neteja");
    }
};
xmlhttp.open("GET", "index.php?lang="+idioma, true);
xmlhttp.send();