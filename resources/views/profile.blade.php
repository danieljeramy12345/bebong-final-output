@extends('layouts.app')

@section('title', 'About | Jeramy O. Daniel')

@section('content')
<section class="page-hero page-hero-compact">
    <div class="container page-hero-inner"><p class="eyebrow"><span class="status-dot"></span> ABOUT ME</p><h1>Starting with<br><span>curiosity.</span></h1><p>A first-year BSIT student learning the building blocks of information technology.</p></div>
</section>
<section class="profile-section section-pad" id="about">
    <div class="container profile-layout">
        <div class="profile-photo-block">
            <img src="{{ asset('images/profile.jpg') }}" alt="Jeramy O. Daniel portrait in business attire" loading="lazy">
            <div class="photo-note"><span>01 — THE LEARNER</span><span>Toboso, Philippines</span></div>
        </div>
        <div class="profile-story">
            <p class="eyebrow eyebrow-dark">HELLO, I'M JERAMY</p>
            <h2>BSIT student.<br><span>Curious beginner.</span></h2>
            <p class="story-lead">I'm interested in coding, website development, computer systems, and learning new technologies.</p>
            <p>As a beginner IT student, I’m building a strong foundation through class activities and personal practice. I enjoy trying out what I learn, asking questions, and improving a little with each project.</p>
            <p>My goal is to keep developing my skills and use technology to create useful, working solutions.</p>
            <a class="button button-dark" href="{{ route('details') }}#projects">Explore my projects <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<section class="profile-facts section-pad">
    <div class="container">
        <div class="section-heading"><div><p class="eyebrow eyebrow-dark">STUDENT DETAILS</p><h2>My starting point.</h2></div></div>
        <div class="facts-grid">
            <article class="fact-item"><i class="bi bi-geo-alt" aria-hidden="true"></i><div><h3>Location</h3><p>Toboso, Negros Occidental, Philippines</p></div></article>
            <article class="fact-item"><i class="bi bi-mortarboard" aria-hidden="true"></i><div><h3>Course and year</h3><p>Bachelor of Science in Information Technology · First Year</p></div></article>
            <article class="fact-item"><i class="bi bi-building" aria-hidden="true"></i><div><h3>School</h3><p>[Insert School Name]</p></div></article>
            <article class="fact-item"><i class="bi bi-compass" aria-hidden="true"></i><div><h3>Interests</h3><p>Programming, web development, computers, new technology</p></div></article>
        </div>
    </div>
</section>
@endsection