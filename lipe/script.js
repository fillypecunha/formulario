const inputs = document.querySelectorAll('.inp');
const handleFocus = ({ target }) => {
   const span = target.previousElementSibling;
   span.classList.add('span-active');
}

const handleFocusout = ({ target }) => {
    if(target.value == ''){
    const span = target.previousElementSibling;
    span.classList.remove('span-active');
    }
 }


inputs.forEach((input) => input.addEventListener('focus', handleFocus));
inputs.forEach((input) => input.addEventListener('focusout', handleFocusout));
