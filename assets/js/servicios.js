const acordionItemHeaders = document.querySelectorAll(".acordion-item-header");

acordionItemHeaders.forEach(acordionItemHeader => {
    acordionItemHeader.addEventListener("click", event => {
        acordionItemHeader.classList.toggle("active");
    });
});