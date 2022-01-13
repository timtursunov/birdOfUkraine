let menuWillOpen = document.querySelector('.footer-burger')
let navMobile = document.querySelector('.nav--mobile ')
let menuWillClose = document.querySelector('.footer-close__box')
let siteHeading = document.querySelector('.site__branding')
let siteNav = document.querySelector('.site__nav')
let allBirds = document.querySelector('#allbirds')
let atypical = document.querySelector('#atypical')
let website = document.querySelector('.website')
let body = document.querySelector('.hfeed')
let openBurger = () => {
  navMobile.style.left = 0;
  menuWillOpen.style.zIndex = -4;
  menuWillOpen.style.opacity = 0;
  menuWillClose.style.opacity = 1;
  menuWillClose.style.zIndex = 4;
  website.style.opacity = 0.34;
  siteNav.style.opacity = 0.34;
  siteHeading.style.opacity = 0.34;
  body.style.overflow = 'hidden'
}
let closeBurger = () => {
  navMobile.style.left = '-264px';
  menuWillOpen.style.zIndex = 4;
  menuWillOpen.style.opacity = 1;
  menuWillClose.style.opacity = 0;
  siteNav.style.opacity = 1;
  siteHeading.style.opacity = 1;
  menuWillClose.style.zIndex = -4;
  website.style.opacity = 1;
  body.style.overflow = 'scroll'
}
menuWillOpen.addEventListener('click',  openBurger);
menuWillClose.addEventListener('click', closeBurger)

// let windowWidth = document.documentElement.clientWidth 
// let imgZoom = document.querySelector('.single-img__zoom')
// let imgOverlay = document.querySelector('.single-overlay--zoom')
// let imgLarge = document.querySelector('.single-img__zoom--large')
// let imgZoomWidthIn;
// let imgZoomHeightIn;
// let imgZoomWidthOut;
// let imgZoomHeightOut;
// let imgWillZoom = () => {
//   imgOverlay.style.border = `1px solid white`
//   imgZoom.style.opacity = 0
//   imgLarge.style.opacity = 1
//   imgLarge.style.zIndex = -1;
//   imgZoom.style.zIndex = 0;
// }
// let imgWillZoomOut = () => {
//   imgOverlay.style.border = `1px solid #143e40`
//   imgZoom.style.opacity = 1;
//   imgLarge.style.opacity = 0
//   imgLarge.style.zIndex = 0;
//   imgZoom.style.zIndex = 0;
// }
// imgOverlay.addEventListener('mousemove', imgWillZoom);
// imgOverlay.addEventListener('mouseleave', imgWillZoomOut)


console.log('hello world')
let border = document.querySelector('.single-zoom__border')
let picture = document.querySelector('.single-zoom__img')
// new stuff
let singleZoom = document.querySelector('.single-zoom')
let singleImg = document.querySelector('.single-img__zoom')
let singleWebPage = document.querySelector('.website-single')
let singleCloseBox = document.querySelector('.single-modal__close-box')
let header = document.querySelector('.site-header')

let singleImgMobile = document.querySelector('.single-img__mobile')

let width = window.screen.width;




singleImgMobile.addEventListener('click', () => {
  singleWebPage.style.opacity = 0;
  singleWebPage.style.zIndex = -2
  singleZoom.style.opacity = 1;
  singleZoom.style.zIndex = 5;

  singleWebPage.style.display = 'none';
  header.style.display = 'none';
})
singleImg.addEventListener('click', () => {
  singleWebPage.style.opacity = 0;
  singleWebPage.style.zIndex = -2
  singleZoom.style.opacity = 1;
  singleZoom.style.zIndex = 5;
  singleWebPage.style.display = 'none';
  header.style.display = 'none';
})
singleCloseBox.addEventListener('click', () => {
  singleWebPage.style.opacity = 1;
  singleWebPage.style.zIndex = 5
  singleZoom.style.opacity = 0;
  singleZoom.style.zIndex = -2;
  singleWebPage.style.display = 'initial';
  header.style.display = 'initial';
})










if (width > 1023){
  border.addEventListener('mousemove', (e) =>{


    const x = e.clientX - e.target.offsetLeft
    const y = e.clientY - e.target.offsetTop
  
    picture.style.transformOrigin = `${x}px ${y}px`
    picture.style.transform = 'scale(2)'
  
  })
  
  border.addEventListener('mouseleave', (e) =>{
    picture.style.transform =" scale(1)"
  })

} 
// else if (width < 1023 && width > 0){
//   border.addEventListener('touchmove', (e) =>{
//     const x = e.clientX - e.target.offsetLeft
//     const y = e.clientY - e.target.offsetTop
  
//     picture.style.transformOrigin = `${x}px ${y}px`
//     picture.style.transform = 'scale(2)'
  
//   })
  
//   border.addEventListener('touchleave', (e) =>{
//     picture.style.transform =" scale(1)"
//   })

// }

// to make modal non movable overflow hidden 