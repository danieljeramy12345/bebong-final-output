@extends('layouts.app')

@section('title', 'Personal IT Portfolio | Jeramy O. Daniel')

@section('content')
```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #312e81);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .cover {
            padding: 40px 20px;
            max-width: 700px;
        }

        .cover h1 {
            font-size: clamp(2.5rem, 7vw, 4.5rem);
            margin-bottom: 20px;
            font-weight: 800;
        }

        .cover h1 span {
            color: #93c5fd;
        }

        .cover p {
            font-size: 1.1rem;
            color: #cbd5e1;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .welcome-btn {
            display: inline-block;
            padding: 15px 40px;
            background: #60a5fa;
            color: #0f172a;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .welcome-btn:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(96, 165, 250, 0.3);
        }

        footer {
            position: absolute;
            bottom: 20px;
            color: #94a3b8;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <main class="cover">
        <h1>Welcome to <span>My Portfolio</span></h1>

        <p>
            Hello and welcome! Explore my portfolio to discover
            my projects, skills, and experiences.
        </p>

        <a href="{{ route('profile') }}" class="welcome-btn">
            Welcome →
        </a>
    </main>

    <footer>
        &copy; {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>

</body>
</html>
```
<section class="home-hero" id="home">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><span class="status-dot"></span> FIRST-YEAR BSIT STUDENT</p>
            <h1>Jeramy O.<br><span>Daniel.</span></h1>
            <p class="hero-intro">Hello! I'm a BSIT student passionate about learning programming, web development, and computer technology. I keep improving through school activities and personal projects.</p>
            <div class="hero-actions">
                <a class="button button-light" href="{{ route('details') }}#projects">View My Projects <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
                <a class="text-link text-link-light" href="{{ route('contacts') }}">Contact Me <i class="bi bi-arrow-down-right" aria-hidden="true"></i></a>
            </div>
            <div class="hero-meta"><span>TOBOSO, NEGROS OCCIDENTAL</span><span>LEARNING BY BUILDING</span></div>
        </div>
        <div class="hero-portrait-wrap">
            <div class="portrait-index">BSIT <span>/ YEAR 01</span></div>
            <img class="hero-portrait" src="{{ asset('images/profile.jpg') }}" alt="Jeramy O. Daniel portrait in business attire" fetchpriority="high">
            <div class="portrait-caption"><span>Learning through building</span><span>Code · Web · Computer technology</span></div>
            <span class="portrait-stamp" aria-hidden="true">JD</span>
        </div>
    </div>
    <div class="hero-bottom-line" aria-hidden="true"><span></span><span>SCROLL TO EXPLORE</span><span></span></div>
</section>

<section class="intro-section section-pad">
    <div class="container intro-grid">
        <p class="eyebrow eyebrow-dark">PERSONAL IT PORTFOLIO</p>
        <div>
            <h2>Learning the foundations, <span>one project at a time.</span></h2>
            <div class="intro-bottom">
                <p>I'm exploring coding, website development, computer systems, and new technologies as I build my skills as a first-year BSIT student.</p>
                <a class="text-link" href="{{ route('profile') }}#about">More about me <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="focus-section section-pad">
    <div class="container">
        <div class="section-heading">
            <div><p class="eyebrow eyebrow-dark">WHAT I'M EXPLORING</p><h2>Curiosity leads the way.</h2></div>
            <p>I'm at the beginning of my IT journey and excited to keep practicing the fundamentals.</p>
        </div>
        <div class="focus-grid">
            <article class="focus-item"><span class="focus-number">01</span><i class="bi bi-code-slash" aria-hidden="true"></i><h3>Learning to code</h3><p>Practicing programming logic, syntax, and problem-solving step by step.</p></article>
            <article class="focus-item"><span class="focus-number">02</span><i class="bi bi-window" aria-hidden="true"></i><h3>Building for the web</h3><p>Exploring HTML, CSS, JavaScript, PHP, and Laravel through small projects.</p></article>
            <article class="focus-item"><span class="focus-number">03</span><i class="bi bi-cpu" aria-hidden="true"></i><h3>Understanding computers</h3><p>Learning about computer systems, development tools, and new technology.</p></article>
        </div>
    </div>
</section>
@endsection