<header class="site-header">
    <nav class="site-nav" aria-label="Main navigation">
        <div class="site-nav-inner container">
            <a class="brand-mark" href="{{ route('home') }}" aria-label="Jeramy O. Daniel, home">
                <span class="brand-symbol">J<span>.</span></span>
                <span class="brand-name">Jeramy O. Daniel</span>
            </a>
            <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" aria-label="Open navigation">
                <span></span><span></span>
            </button>
            <div class="nav-links" id="primary-navigation">
                <a href="{{ route('home') }}" @class(['nav-link', 'is-active' => request()->routeIs('home')]) data-section-link="home" @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
                <a href="{{ route('profile') }}#about" @class(['nav-link', 'is-active' => request()->routeIs('profile')]) data-section-link="about" @if (request()->routeIs('profile')) aria-current="page" @endif>About</a>
                <a href="{{ route('details') }}#skills" @class(['nav-link', 'is-active' => request()->routeIs('details')]) data-section-link="skills" @if (request()->routeIs('details')) aria-current="location" @endif>Skills</a>
                <a href="{{ route('details') }}#achievements" class="nav-link" data-section-link="achievements">Achievements</a>
                <a href="{{ route('details') }}#projects" class="nav-link" data-section-link="projects">Projects</a>
                <a @class(['nav-contact', 'is-active' => request()->routeIs('contacts')]) href="{{ route('contacts') }}" @if (request()->routeIs('contacts')) aria-current="page" @endif>Contact <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>
</header>