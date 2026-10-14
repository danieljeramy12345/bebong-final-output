@extends('layouts.app')

@section('title', 'Skills & Projects | Jeramy O. Daniel')

@section('content')
<section class="page-hero page-hero-compact">
    <div class="container page-hero-inner"><p class="eyebrow"><span class="status-dot"></span> PERSONAL IT PORTFOLIO</p><h1>Practice, progress,<br><span>and projects.</span></h1><p>A beginner's toolkit and learning milestones from my first year studying IT.</p></div>
</section>
<section class="skills-section section-pad" id="skills">
    <div class="container">
        <div class="section-heading"><div><p class="eyebrow eyebrow-dark">TECHNICAL SKILLS</p><h2>Learning the essentials.</h2></div><p>I'm a beginner with each of these tools and continue to practice the fundamentals.</p></div>
        <div class="student-skill-grid">
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-filetype-html" aria-hidden="true"></i><div><h3>HTML</h3><span>Basic webpage structure</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="HTML beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="30"><span style="--skill-level: 30%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-filetype-css" aria-hidden="true"></i><div><h3>CSS</h3><span>Basic styling and layouts</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="CSS beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="25"><span style="--skill-level: 25%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-filetype-js" aria-hidden="true"></i><div><h3>JavaScript</h3><span>Basic programming and interactivity</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="JavaScript beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="20"><span style="--skill-level: 20%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-filetype-php" aria-hidden="true"></i><div><h3>PHP</h3><span>Introduction to server-side programming</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="PHP beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="18"><span style="--skill-level: 18%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-layers" aria-hidden="true"></i><div><h3>Laravel</h3><span>Learning web application development</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="Laravel beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="15"><span style="--skill-level: 15%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-database" aria-hidden="true"></i><div><h3>MySQL</h3><span>Basic database concepts</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="MySQL beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="18"><span style="--skill-level: 18%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-braces" aria-hidden="true"></i><div><h3>C++</h3><span>Basic programming logic and syntax</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="C++ beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="22"><span style="--skill-level: 22%"></span></div></article>
            <article class="student-skill"><div class="student-skill-heading"><i class="bi bi-git" aria-hidden="true"></i><div><h3>Git and GitHub</h3><span>Introduction to version control</span></div><strong>Beginner</strong></div><div class="skill-track" role="progressbar" aria-label="Git and GitHub beginner skill level" aria-valuemin="0" aria-valuemax="100" aria-valuenow="15"><span style="--skill-level: 15%"></span></div></article>
        </div>
    </div>
</section>
<section class="profile-facts section-pad" id="achievements">
    <div class="container">
        <div class="section-heading"><div><p class="eyebrow eyebrow-dark">ACHIEVEMENTS</p><h2>Small steps count.</h2></div><p>Learning milestones and practice projects from my IT journey.</p></div>
        <div class="milestone-grid">
            <article class="milestone-card"><span>LEARNING MILESTONE</span><i class="bi bi-file-earmark-code" aria-hidden="true"></i><h3>First Webpage</h3><p>Created a basic webpage using HTML and CSS.</p></article>
            <article class="milestone-card"><span>PRACTICE</span><i class="bi bi-terminal" aria-hidden="true"></i><h3>Programming Practice</h3><p>Practiced variables, conditions, loops, and user input.</p></article>
            <article class="milestone-card"><span>PRACTICE PROJECT</span><i class="bi bi-controller" aria-hidden="true"></i><h3>TAPTAP Game Project</h3><p>Practiced a browser-based tapping game concept with HTML, CSS, and JavaScript.</p></article>
            <article class="milestone-card"><span>LEARNING MILESTONE</span><i class="bi bi-boxes" aria-hidden="true"></i><h3>Laravel Learning</h3><p>Started learning routes, controllers, Blade templates, and database integration.</p></article>
            <article class="milestone-card"><span>LEARNING MILESTONE</span><i class="bi bi-pc-display" aria-hidden="true"></i><h3>Technical Setup</h3><p>Practiced setting up Visual Studio Code and local web development tools.</p></article>
        </div>
    </div>
</section>
<section class="projects-section section-pad" id="projects">
    <div class="container">
        <div class="section-heading"><div><p class="eyebrow eyebrow-dark">PROJECTS</p><h2>Learning by making.</h2></div><p>Practice work built while exploring programming and web development.</p></div>
        <div class="project-grid student-project-grid">
            <article class="project-card"><div class="project-visual project-game" aria-hidden="true"><i class="bi bi-controller"></i><span>TAP!</span></div><div class="project-content"><div class="project-title"><h3>TAPTAP Speed Tap Game</h3><i class="bi bi-arrow-up-right" aria-hidden="true"></i></div><p>A browser game concept: tap a monster to earn points before the timer runs out.</p><div class="project-tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div></div></article>
            <article class="project-card"><div class="project-visual project-portfolio" aria-hidden="true"><i class="bi bi-person-badge"></i><span>MY PORTFOLIO</span></div><div class="project-content"><div class="project-title"><h3>Student Portfolio Website</h3><i class="bi bi-arrow-up-right" aria-hidden="true"></i></div><p>A personal website introducing my background, beginner skills, projects, and learning milestones.</p><div class="project-tags"><span>Laravel</span><span>Blade</span><span>Bootstrap</span><span>CSS</span></div></div></article>
            <article class="project-card"><div class="project-visual project-code" aria-hidden="true"><i class="bi bi-braces-asterisk"></i><span>&lt;practice /&gt;</span></div><div class="project-content"><div class="project-title"><h3>Basic Programming Exercises</h3><i class="bi bi-arrow-up-right" aria-hidden="true"></i></div><p>Small programs for practicing variables, conditions, loops, and other fundamentals.</p><div class="project-tags"><span>C++</span><span>PHP</span><span>JavaScript</span></div></div></article>
        </div>
    </div>
</section>
@endsection