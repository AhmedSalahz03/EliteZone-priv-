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
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

var scrollAnimations = document.querySelectorAll('.scroll-animation-left');

window.addEventListener('scroll', function() {
  scrollAnimations.forEach(function(el) {
    if (isElementInViewport(el)) {
      el.classList.add('show');
    }
  });
});