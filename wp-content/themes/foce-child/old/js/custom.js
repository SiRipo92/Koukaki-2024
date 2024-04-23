const titleSections = document.querySelectorAll('h2, h3');

titleSections.forEach(currentTitle => {
    const words = currentTitle.textContent.split(' ');
    currentTitle.textContent = '';
    words.forEach((currentWord, index) => {
        const span = document.createElement('span');
        span.textContent = currentWord + " ";
        span.classList.add('word-animation');
        span.style.animationDelay = `${index * 0.25}s`;
        currentTitle.appendChild(span);
    });
});

// Intersection Observer callback function
function intersectionCallback(entries, observer) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add('Title-Animation');
            observer.unobserve(entry.target);
        } else {
            entry.target.classList.remove('Title-Animation');
        }
    });
}

// Create a new instance of IntersectionObserver
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll('.animateSection');
    const observer = new IntersectionObserver(intersectionCallback, {
        rootMargin: "-10% 0px",
        threshold: 0.1,
    });
    sections.forEach(section => observer.observe(section));
});

// Banner Parallax effect
window.addEventListener('scroll', () => {
    var scrolled = window.pageYOffset;
    var parallaxContainer = document.getElementById("parallax-container");
    if (parallaxContainer) {
        parallaxContainer.style.transform = "translateY(" + scrolled * 0.5 + "px)";
    }
});

// Smooth scroll
function isinViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function handleScroll() {
    var titles = document.querySelectorAll('.section-title');
    titles.forEach(function(title) {
        if (isinViewport(title)) {
            title.classList.add('Title-Animation');
        } else {
            title.classList.remove('Title-Animation');
        }
    });
}

// Combined event listeners for scroll and DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    handleScroll();
});

window.addEventListener("scroll", function() {
    handleScroll();
});