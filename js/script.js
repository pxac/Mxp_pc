//搜索按钮

let $ = tName => {
    return document.querySelector(tName);
}

let oSearch = $('.search');
let oIcon = $('.icon');
let oClear = $('.clear');
let oText = $('input[type="text"]');

oIcon.addEventListener('click',() => {
    oSearch.classList.toggle('changWidth');
});

oClear.addEventListener('click',() => {
    oText.value ='';
});
//切换按钮
document.querySelectorAll('.s-button')[1].onclick = () => {
    let lists = document.querySelectorAll('.item');
    document.querySelector('#slide').appendChild(lists[0]);
}
document.querySelectorAll('.s-button')[0].onclick = () => {
    let lists = document.querySelectorAll('.item')
    document.querySelector('#slide').prepend(lists[lists.length - 1])
}

