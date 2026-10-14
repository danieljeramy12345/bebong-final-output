const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-navigation');

if (menuButton && navigation) {
	menuButton.addEventListener('click', () => {
		const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

		menuButton.setAttribute('aria-expanded', String(!isOpen));
		menuButton.setAttribute('aria-label', isOpen ? 'Open navigation' : 'Close navigation');
		navigation.classList.toggle('is-open', !isOpen);
	});

	navigation.addEventListener('click', (event) => {
		if (event.target.closest('a') && window.matchMedia('(max-width: 767px)').matches) {
			menuButton.setAttribute('aria-expanded', 'false');
			menuButton.setAttribute('aria-label', 'Open navigation');
			navigation.classList.remove('is-open');
		}
	});
}

const messageField = document.querySelector('#message');
const messageCount = document.querySelector('#message-count');

if (messageField && messageCount) {
	const updateMessageCount = () => {
		messageCount.textContent = `${messageField.value.length} / 5000`;
	};

	messageField.addEventListener('input', updateMessageCount);
	updateMessageCount();
}

const sectionLinks = [...document.querySelectorAll('[data-section-link]')];

if (sectionLinks.length > 0) {
	const activateSectionLink = (sectionId) => {
		sectionLinks.forEach((link) => {
			const isActive = link.dataset.sectionLink === sectionId;

			link.classList.toggle('is-active', isActive);

			if (isActive) {
				link.setAttribute('aria-current', sectionId === 'home' ? 'page' : 'location');
			} else {
				link.removeAttribute('aria-current');
			}
		});
	};

	const initialSection = window.location.hash.slice(1);

	if (initialSection && document.getElementById(initialSection)) {
		activateSectionLink(initialSection);
	}

	const sections = sectionLinks
		.map((link) => document.getElementById(link.dataset.sectionLink))
		.filter(Boolean);

	if ('IntersectionObserver' in window && sections.length > 0) {
		const sectionObserver = new IntersectionObserver((entries) => {
			const visibleSection = entries
				.filter((entry) => entry.isIntersecting)
				.sort((first, second) => first.boundingClientRect.top - second.boundingClientRect.top)[0];

			if (visibleSection) {
				activateSectionLink(visibleSection.target.id);
			}
		}, { rootMargin: '-25% 0px -65% 0px' });

		sections.forEach((section) => sectionObserver.observe(section));
	}
}
