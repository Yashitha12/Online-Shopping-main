const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav=document.getElementById('navbar');

if(bar) {
    bar.addEventListener('çlick',() =>{
        nav.classList.add('active');
    })
}

if(close) {
    bar.addEventListener('çlick',() =>{
        nav.classList.remove('active');
    })
}
