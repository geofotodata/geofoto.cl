const header = document.querySelector('[data-header]');
const menu = document.querySelector('[data-menu]');
const menuButton = document.querySelector('[data-menu-button]');

const updateHeader = () => {
    header?.classList.toggle('is-scrolled', window.scrollY > 24);
};

const closeMenu = () => {
    if (!menu || !menuButton) return;
    menu.classList.remove('is-open');
    menuButton.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('menu-open');
};

menuButton?.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!isOpen));
    menu?.classList.toggle('is-open', !isOpen);
    document.body.classList.toggle('menu-open', !isOpen);
});

menu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
window.addEventListener('scroll', updateHeader, { passive: true });
updateHeader();

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
} else {
    document.querySelectorAll('.reveal').forEach((element) => element.classList.add('is-visible'));
}
