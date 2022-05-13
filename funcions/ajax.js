var lang = window.navigator.userLanguage || window.navigator.language;
        
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if (this.readyState == 4 && this.status == 200) {
    document.getElementById("text").innerHTML = this.responseText;
    document.getElementById("text").classList.add("neteja");
}
};
xmlhttp.open("GET", "index.php?lang="+lang, true);
xmlhttp.send();