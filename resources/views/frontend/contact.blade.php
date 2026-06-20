@extends('layouts.frontend')

@section('title', 'Contact AgroNet Solutions — Get a Quote for Shade Nets')
@section('meta_description', 'Contact AgroNet Solutions for bulk shade net inquiries, export orders, and product samples. Call +91 79 2345 6789 or email info@agronetsolutions.in')

@section('content')

<section class="page-banner" aria-label="Contact page banner">
    <div class="container">
        <div class="page-banner-content">
            <h1>Contact Us</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</section>

<section class="inquiry-section pt-100 pb-100" aria-label="Contact and inquiry form">
    <div class="container">
        <div class="inquiry-wrapper">

            <div data-aos="fade-right">
                <span class="section-tag">Get in Touch</span>
                <h2 class="inquiry-info-title">We Respond Within<br>4 Business Hours</h2>
                <p class="inquiry-info-text">
                    Whether you are a commercial farmer, greenhouse operator, agri-distributor, or
                    export buyer — our team will provide accurate specifications, pricing, and lead times
                    for your order requirements.
                </p>

                <div class="inquiry-contact-list">
                    <div class="inquiry-contact-item">
                        <div class="inquiry-contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="inquiry-contact-detail">
                            <h5>Registered Office &amp; Factory</h5>
                            <p>Plot No. 42, GIDC Industrial Estate,<br>
                               Kachigam, Daman, Daman & Diu - 396210, India</p>
                        </div>
                    </div>
                    <div class="inquiry-contact-item">
                        <div class="inquiry-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="inquiry-contact-detail">
                            <h5>Sales &amp; General Enquiry</h5>
                            <a href="tel:+917923456789">+91 79 2345 6789</a>
                        </div>
                    </div>
                    <div class="inquiry-contact-item">
                        <div class="inquiry-contact-icon">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </div>
                        <div class="inquiry-contact-detail">
                            <h5>Export Enquiry (WhatsApp)</h5>
                            <a href="tel:+919876543210">+91 98765 43210</a>
                        </div>
                    </div>
                    <div class="inquiry-contact-item">
                        <div class="inquiry-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="inquiry-contact-detail">
                            <h5>Email</h5>
                            <a href="mailto:info@agronetsolutions.in">info@agronetsolutions.in</a>
                        </div>
                    </div>
                    <div class="inquiry-contact-item">
                        <div class="inquiry-contact-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="inquiry-contact-detail">
                            <h5>Working Hours</h5>
                            <p>Monday to Saturday: 9:00 AM – 6:00 PM IST</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inquiry-form" data-aos="fade-left" data-aos-delay="100">
                <h3>Send a Detailed Inquiry</h3>
                <p class="form-subtext">Provide your requirement details and we will respond with specifications and pricing.</p>

                @if(session('success'))
                <div class="alert-success">
                    <i class="fa-solid fa-circle-check" style="margin-right: 6px;"></i>
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert-error">
                    Please correct the errors below and resubmit.
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Your full name" required>
                            @error('name')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email"
                                   value="{{ old('email') }}"
                                   placeholder="your@company.com" required>
                            @error('email')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone / WhatsApp *</label>
                            <input type="tel" id="phone" name="phone"
                                   value="{{ old('phone') }}"
                                   placeholder="+91 XXXXX XXXXX" required>
                            @error('phone')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="company">Company / Organisation</label>
                            <input type="text" id="company" name="company"
                                   value="{{ old('company') }}"
                                   placeholder="Farm / company name (optional)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_interest">Product Category of Interest</label>
                        <select id="product_interest" name="product_interest">
                            <option value="">Select a product category</option>
                            <option value="Agriculture Shade Net" {{ (old('product_interest') === 'Agriculture Shade Net' || request('category') === 'Agriculture Shade Net') ? 'selected' : '' }}>Agriculture Shade Net</option>
                            <option value="Construction Safety Net" {{ (old('product_interest') === 'Construction Safety Net' || request('category') === 'Construction Safety Net') ? 'selected' : '' }}>Construction Safety Net</option>
                            <option value="Greenhouse Net" {{ (old('product_interest') === 'Greenhouse Net' || request('category') === 'Greenhouse Net') ? 'selected' : '' }}>Greenhouse Net</option>
                            <option value="Poultry Net" {{ (old('product_interest') === 'Poultry Net' || request('category') === 'Poultry Net') ? 'selected' : '' }}>Poultry Net</option>
                            <option value="Bird Protection Net" {{ (old('product_interest') === 'Bird Protection Net' || request('category') === 'Bird Protection Net') ? 'selected' : '' }}>Bird Protection Net</option>
                            <option value="HDPE Woven Fabric" {{ (old('product_interest') === 'HDPE Woven Fabric' || request('category') === 'HDPE Woven Fabric') ? 'selected' : '' }}>HDPE Woven Fabric</option>
                            <option value="Custom Order" {{ (old('product_interest') === 'Custom Order' || request('category') === 'Custom Order') ? 'selected' : '' }}>Custom Order</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Requirement Details *</label>
                        <textarea id="message" name="message"
                                  placeholder="Please mention: shade %, width, quantity (metres/rolls), delivery location, and any special requirements..." required>{{ old('message') ?? (request('product') ? 'I am interested in ' . request('product') . '. Please send me a quote and technical specifications.' : '') }}</textarea>
                        @error('message')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn-primary">
                            <i class="fa-solid fa-paper-plane"></i> Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Map --}}
<section class="container pb-100" aria-label="Factory location map" data-aos="fade-up">
    <div class="map-card-wrapper">
        <iframe
            src="https://maps.google.com/maps?q=Plot%20No.%2042,%20GIDC%20Industrial%20Estate,%20Kachigam,%20Daman,%20Daman%20and%20Diu%20-%20396210&t=&z=14&ie=UTF8&iwloc=&output=embed"
            width="100%" height="400" style="border: 0; display: block;"
            allowfullscreen="" loading="lazy"
            title="AgroNet Solutions factory location — Daman, Daman & Diu">
        </iframe>
    </div>
</section>

@endsection
