const header = document.querySelector('#site-header');
const menuToggle = document.querySelector('.nav-toggle');
const navigation = document.querySelector('#primary-navigation');
const lightbox = document.querySelector('.lightbox');
const lightboxImage = lightbox?.querySelector('img');
const lightboxClose = lightbox?.querySelector('.lightbox-close');
let lastFocusedElement = null;

const updateHeader = () => {
    header?.classList.toggle('is-scrolled', window.scrollY > 24);
};

updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    menuToggle.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
    navigation?.classList.toggle('is-open', !isOpen);
});

navigation?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        menuToggle?.setAttribute('aria-expanded', 'false');
        menuToggle?.setAttribute('aria-label', 'Buka menu');
        navigation.classList.remove('is-open');
    });
});

const closeLightbox = () => {
    if (!lightbox || lightbox.hidden) return;
    lightbox.hidden = true;
    document.body.style.overflow = '';
    lightboxImage?.removeAttribute('src');
    lastFocusedElement?.focus();
};

document.querySelectorAll('[data-lightbox]').forEach((button) => {
    button.addEventListener('click', () => {
        if (!lightbox || !lightboxImage) return;
        lastFocusedElement = button;
        lightboxImage.src = button.dataset.lightbox;
        lightboxImage.alt = button.querySelector('img')?.alt ?? '';
        lightbox.hidden = false;
        document.body.style.overflow = 'hidden';
        lightboxClose?.focus();
    });
});

lightboxClose?.addEventListener('click', closeLightbox);
lightbox?.addEventListener('click', (event) => {
    if (event.target === lightbox) closeLightbox();
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeLightbox();
});

const revealElements = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.12 });
    revealElements.forEach((element) => revealObserver.observe(element));
} else {
    revealElements.forEach((element) => element.classList.add('is-visible'));
}
