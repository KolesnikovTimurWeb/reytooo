let buttonFiat = document.querySelector('.global-button-fiat')
let buttonCrypto = document.querySelector('.global-button-crypty')
let buttonContainerCrypto = document.querySelector('.global-container-crypto')
let buttonContainerFiat = document.querySelector('.global-container-fiat')

buttonFiat.addEventListener('click', function () {
   buttonContainerCrypto.classList.remove('active')
   buttonContainerFiat.classList.add('active')
   buttonCrypto.classList.remove('active')
   buttonFiat.classList.add('active')
})

buttonCrypto.addEventListener('click', function () {
   buttonContainerCrypto.classList.add('active')
   buttonContainerFiat.classList.remove('active')
   buttonFiat.classList.remove('active')
   buttonCrypto.classList.add('active')
})






const headerBurger = document.querySelector('.header__burger')
const headerMenu = document.querySelector('.header-nav');

headerBurger.addEventListener('click', function () {
   headerMenu.classList.toggle("active")
   headerBurger.classList.toggle("active")
})











