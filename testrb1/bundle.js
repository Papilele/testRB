document.addEventListener("DOMContentLoaded", function() {


  //____________________________SWIPER____________________________
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: false,
  
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
  
    navigation: {
      nextEl: '.button_next',
      prevEl: '.button_prev',
    },
  
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


});

//____________________________MASK_PHONE_NUMBER____________________________


let phoneInput = document.querySelector(".phone");
let btn = document.querySelector(".form_send_button");

const phoneMask = new IMask(phoneInput, {
  mask: "+{7}(000)000-00-00",
});

phoneInput.addEventListener("input", phoneInputHandler);

function phoneInputHandler() {
  if (phoneMask.masked.isComplete) {
    btn.classList.add("button_active");
  } else {
    btn.classList.remove("button_active");
  }
}

//____________________________MASK_DATE____________________________


var lazyMask = IMask(
  document.querySelector(".date"),
  {
    mask: Date,
    lazy: true,
    autofix: true,
    blocks: {
      d: {mask: IMask.MaskedRange, placeholderChar: 'd', from: 1, to: 31, maxLength: 2},
      m: {mask: IMask.MaskedRange, placeholderChar: 'm', from: 1, to: 12, maxLength: 2},
      Y: {mask: IMask.MaskedRange, placeholderChar: 'y', from: 1900, to: 2999, maxLength: 4}
    }
  }
);

document.addEventListener("DOMContentLoaded", function() {
    const navMobile = document.querySelector(".navigation-mobile__shell");
    const navWrapper = document.getElementById("navigation-mobile");
    const button = document.getElementById("mobile-menu-icon");
    const burgerIcon = document.getElementById("burger_icon");
    navWrapper.style.height = 0;

    
    
    button.addEventListener("click", function() {
      
        if (document.documentElement.clientWidth <=840) {
          
            const navHeight = navMobile.offsetHeight;
    
            navWrapper.classList.toggle("active");
    
            if (navWrapper.style.height !== `${navHeight}px`) {
                navWrapper.style.height = `${navHeight}px`;
                burgerIcon.src="images/close_burger.png";
                console.log('if')
            } else {
                navWrapper.style.height = 0;
                burgerIcon.src="images/burger.png";
                console.log('else')
            }            
        }
    });
});