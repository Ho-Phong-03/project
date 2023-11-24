let list = document.querySelector('#list');
let imgs = document.getElementsByClassName('card_img');
let lengthImgs = imgs.length -1;
let inDex = 0

let handleChangeSlider = () => {
    if(inDex == lengthImgs)
    {
        inDex = 0;
        let width = imgs[0].offsetWidth;
        list.style.transform = `translateX(0px)`
    }
    else{
        inDex ++;
    let width = imgs[0].offsetWidth;
    list.style.transform = `translateX(${width * -1 * inDex}px)`
    }
}
let intervalSlider = setInterval(handleChangeSlider, 4000)

function btnRight(){
    clearInterval(intervalSlider);
    handleChangeSlider();
    intervalSlider = setInterval(handleChangeSlider, 4000);
}
function btnLeft(){
    clearInterval(intervalSlider);

    if(inDex == 0)
    {
        inDex = lengthImgs;
        let width = imgs[0].offsetWidth;
        list.style.transform = `translateX(${width * -1 * inDex}px)`
    }
    else{
        inDex --;
    let width = imgs[0].offsetWidth;
    list.style.transform = `translateX(${width * -1 * inDex}px)`
    }
    intervalSlider = setInterval(handleChangeSlider, 4000);

}

// let list = document.getElementById('list');
// let items = document.querySelectorAll('item-slider');
// let cardImg = document.getElementsByName('.item-slider .card_img');
// let inDexSlider = 0;
// let arrayImg = cardImg.length - 1;

// function btnLeft() {
//     if (inDexSlider - 1 < 0) 
//     {
//         inDexSlider = arrayImg;
//     } 
//     else 
//     {
//         inDexSlider -= 1;
//     }
//     resetBanner();
// }

// function btnRight() {
//     if (inDexSlider + 1 > arrayImg) 
//     {
//         inDexSlider = 0;
//     } 
//     else 
//     {
//         inDexSlider += 1;
//     }
//     resetBanner();
// }

// function resetBanner() {
//     let checkLeft = cardImg[inDexSlider].offsetLeft;
//     list.style.left = -checkLeft + 'px';
// }