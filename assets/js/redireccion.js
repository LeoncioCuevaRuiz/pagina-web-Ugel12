
(function(){
    let dest = location.hash.slice(1);
    if(dest){
        let tab = document.getElementById(dest);
        if(tab){
            tab.click();
        }
    }
})();