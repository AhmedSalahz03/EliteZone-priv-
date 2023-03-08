const animateElements = document.querySelectorAll('.animate');

function checkIfInView() {
  for (let i = 0; i < animateElements.length; i++) {
    const element = animateElements[i];
    const elementPosition = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    if (elementPosition.top <= windowHeight - 100) {
      element.classList.add('visible');
    }
  }
}

window.addEventListener('scroll', checkIfInView);