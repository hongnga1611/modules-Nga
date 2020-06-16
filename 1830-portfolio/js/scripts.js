$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();




});

function ShowMore() {
    document.getElementById('show-more').style.display = 'grid';
    document.getElementById('load-more').style.display = 'none';
}

function changesClass(val) {
    var arrEl = document.querySelectorAll('.nav-item');
    arrEl.forEach(function(item) {
        item.classList.remove('active_nav');
    });

    document.getElementById(val).classList.add('active_nav');
    // document.getElementById(val).classList.remove('span-nav');
}