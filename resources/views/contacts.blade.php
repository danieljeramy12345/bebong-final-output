@extends('layouts.app')

@section('title', 'Contact | Jeramy O. Daniel')

@section('content')
<section class="page-hero page-hero-compact">
    <div class="container page-hero-inner"><p class="eyebrow"><span class="status-dot"></span> CONTACT</p><h1>Let's talk<br><span>about technology.</span></h1><p>Questions, project ideas, or a hello are all welcome.</p></div>
</section>
<section class="contact-section section-pad">
    <div class="container contact-layout">
        <aside class="contact-aside">
            <p class="eyebrow eyebrow-dark">GET IN TOUCH</p><h2>Reach out<br>or say hello.</h2><p>I'm learning and always glad to connect with people interested in IT and web development.</p>
            <div class="contact-detail"><span class="contact-icon"><i class="bi bi-envelope" aria-hidden="true"></i></span><span><small>EMAIL</small><strong>[Insert Email Address]</strong></span></div>
            <div class="contact-detail"><span class="contact-icon"><i class="bi bi-github" aria-hidden="true"></i></span><span><small>GITHUB</small><strong>[Insert GitHub Profile URL]</strong></span></div>
            <div class="contact-detail"><span class="contact-icon"><i class="bi bi-geo-alt" aria-hidden="true"></i></span><span><small>LOCATION</small><strong>Toboso, Negros Occidental, Philippines</strong></span></div>
        </aside>
        <div class="contact-form-wrap">
            @if (session('success'))
                <div class="form-alert" role="status"><i class="bi bi-check-circle" aria-hidden="true"></i><span>Thanks, {{ session('contact_name') }}. {{ session('success') }}</span></div>
            @endif
            <form class="contact-form" action="{{ route('contacts.submit') }}" method="POST" novalidate>
                @csrf
                <div class="form-field">
                    <label for="name">Your name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required maxlength="100" aria-describedby="name-error" @error('name') aria-invalid="true" @enderror>
                    @error('name')<p class="field-error" id="name-error">{{ $message }}</p>@enderror
                </div>
                <div class="form-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required maxlength="255" aria-describedby="email-error" @error('email') aria-invalid="true" @enderror>
                    @error('email')<p class="field-error" id="email-error">{{ $message }}</p>@enderror
                </div>
                <div class="form-field">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required maxlength="150" aria-describedby="subject-error" @error('subject') aria-invalid="true" @enderror>
                    @error('subject')<p class="field-error" id="subject-error">{{ $message }}</p>@enderror
                </div>
                <div class="form-field">
                    <label for="message">Your message</label>
                    <textarea id="message" name="message" rows="5" required maxlength="5000" aria-describedby="message-count message-error" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
                    <div class="message-meta"><span id="message-error">@error('message')<span class="field-error">{{ $message }}</span>@enderror</span><span id="message-count" aria-live="polite">0 / 5000</span></div>
                </div>
                <p class="form-note">This sample form validates your message but does not send or store submissions.</p>
                <button class="button button-dark" type="submit">Send message <i class="bi bi-arrow-up-right" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</section>
@endsection