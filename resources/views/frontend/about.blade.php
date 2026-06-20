@extends('layouts.frontend')

@section('title', 'About AgroNet Solutions — HDPE Net Manufacturer Since 2004')
@section('meta_description', 'Learn about AgroNet Solutions — 20+ years of HDPE shade net manufacturing from Daman. ISO certified facility, 500+ clients, exported to 18 countries.')

@section('content')

<section class="page-banner" aria-label="About page banner">
    <div class="container">
        <div class="page-banner-content">
            <h1>About AgroNet Solutions</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</section>

{{-- Company Story --}}
<section class="pt-80 pb-80" style="background: #FFF;" aria-label="Company story">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center;">
            <div data-aos="fade-right">
                <div style="border-radius: 8px; overflow: hidden; height: 480px;">
                    <img src="{{ asset('assets/img/about/factory.png') }}"
                         alt="AgroNet Solutions HDPE net manufacturing facility"
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="100">
                <span class="section-tag">Our Story</span>
                <h2 class="section-title">Two Decades of Precision <span>Net Manufacturing</span></h2>
                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.8; margin-bottom: 18px;">
                    AgroNet Solutions was founded in 2004 by a team of polymer engineers and agricultural technologists
                    who identified a critical gap in the Indian market — the absence of consistently manufactured,
                    UV-stabilized shade nets for commercial farming.
                </p>
                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.8; margin-bottom: 18px;">
                    Starting with a single flat-loom weaving unit in Daman's industrial belt, we have grown
                    into a fully integrated manufacturing operation with 24 production lines, an in-house testing
                    laboratory, and a nationwide distribution network.
                </p>
                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.8;">
                    Today, our products protect crops across India and are exported to agricultural markets
                    in Southeast Asia, the Middle East, East Africa, and Europe.
                </p>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 36px; padding-top: 28px; border-top: 1px solid var(--border);">
                    <div style="text-align: center;">
                        <i class="fa-solid fa-users" style="color: var(--accent); font-size: 24px; display: block; margin-bottom: 8px;"></i>
                        <span class="counter-number" data-target="500" data-suffix="+"
                              style="font-family: var(--font-heading); font-size: 32px; font-weight: 900; color: var(--primary); display: block;">0</span>
                        <span style="font-size: 12px; color: var(--text-muted);">Clients Served</span>
                    </div>
                    <div style="text-align: center;">
                        <i class="fa-solid fa-globe" style="color: var(--accent); font-size: 24px; display: block; margin-bottom: 8px;"></i>
                        <span class="counter-number" data-target="18" data-suffix=""
                              style="font-family: var(--font-heading); font-size: 32px; font-weight: 900; color: var(--primary); display: block;">0</span>
                        <span style="font-size: 12px; color: var(--text-muted);">Export Countries</span>
                    </div>
                    <div style="text-align: center;">
                        <i class="fa-solid fa-industry" style="color: var(--accent); font-size: 24px; display: block; margin-bottom: 8px;"></i>
                        <span class="counter-number" data-target="24" data-suffix=""
                              style="font-family: var(--font-heading); font-size: 32px; font-weight: 900; color: var(--primary); display: block;">0</span>
                        <span style="font-size: 12px; color: var(--text-muted);">Production Lines</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="pt-80 pb-80" style="background: var(--bg-light);" aria-label="Mission and vision">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
            <div class="mission-card" data-aos="fade-up">
                <div style="width: 52px; height: 52px; background: rgba(42,92,42,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fa-solid fa-bullseye" style="color: var(--primary); font-size: 22px;"></i>
                </div>
                <h3 style="font-size: 20px; font-weight: 700; color: var(--secondary); margin-bottom: 14px; font-family: var(--font-heading);">Our Mission</h3>
                <p style="font-size: 14px; color: var(--text-muted); line-height: 1.8;">
                    To manufacture HDPE shade nets of consistent quality that protect crops, improve yields, and
                    reduce the agricultural losses caused by excessive solar radiation, pest pressure, and adverse
                    weather — while maintaining accessible pricing for farmers at all scales.
                </p>
            </div>
            <div class="mission-card vision-card" data-aos="fade-up" data-aos-delay="100">
                <div style="width: 52px; height: 52px; background: rgba(52,199,123,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fa-solid fa-eye" style="color: var(--accent); font-size: 22px;"></i>
                </div>
                <h3 style="font-size: 20px; font-weight: 700; color: var(--secondary); margin-bottom: 14px; font-family: var(--font-heading);">Our Vision</h3>
                <p style="font-size: 14px; color: var(--text-muted); line-height: 1.8;">
                    To be the most trusted HDPE net manufacturer in South Asia, recognized for technical
                    precision, raw material integrity, and responsive customer support — from the individual
                    farmer to the large agribusiness enterprise.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Milestones --}}
<section class="pt-80 pb-80" style="background: #FFF;" aria-label="Company milestones">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
            <span class="section-tag">Company History</span>
            <h2 class="section-title">Milestones of <span>Excellence</span></h2>
        </div>
        <div class="timeline-vertical" data-aos="fade-up">
            <!-- 2004 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2004</span>
                    <h3 class="timeline-vertical-title">Company Founded</h3>
                    <p class="timeline-vertical-text">
                        AgroNet Solutions established in Daman with 2 weaving machines
                        and a team of 8. First product: 35% green shade net supplied to local nurseries.
                    </p>
                </div>
            </div>
            <!-- 2009 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2009</span>
                    <h3 class="timeline-vertical-title">ISO 9001 Certification</h3>
                    <p class="timeline-vertical-text">
                        Achieved ISO 9001:2008 quality management certification, expanding
                        production to 8 flat-loom units and entering the greenhouse net segment.
                    </p>
                </div>
            </div>
            <!-- 2014 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2014</span>
                    <h3 class="timeline-vertical-title">Export Operations Begin</h3>
                    <p class="timeline-vertical-text">
                        First export consignment of 50% shade nets to Kenya and Tanzania.
                        Established dedicated export documentation and compliance team.
                    </p>
                </div>
            </div>
            <!-- 2018 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2018</span>
                    <h3 class="timeline-vertical-title">New Manufacturing Plant</h3>
                    <p class="timeline-vertical-text">
                        Inaugurated a 42,000 sq. ft. purpose-built manufacturing facility at GIDC Metoda
                        with 18 production lines and an in-house polymer testing laboratory.
                    </p>
                </div>
            </div>
            <!-- 2021 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2021</span>
                    <h3 class="timeline-vertical-title">Construction Net Division</h3>
                    <p class="timeline-vertical-text">
                        Launched fire-retardant construction safety nets meeting BIS and ISO standards,
                        serving major construction contractors across Gujarat and Maharashtra.
                    </p>
                </div>
            </div>
            <!-- 2024 -->
            <div class="timeline-vertical-item">
                <div class="timeline-vertical-dot"></div>
                <div class="timeline-vertical-card">
                    <span class="timeline-vertical-year">2024</span>
                    <h3 class="timeline-vertical-title">500+ Active Clients</h3>
                    <p class="timeline-vertical-text">
                        Crossed 500 active clients milestone. Exporting to 18 countries.
                        Installed 24 production lines with monthly output capacity of 800 MT.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Quality Section --}}
<section class="cta-banner" style="background-image: url('{{ asset('assets/img/hero/cta-bg.png') }}')"
         aria-label="Quality assurance CTA">
    <div class="cta-banner-overlay"></div>
    <div class="container">
        <div class="cta-banner-content" data-aos="zoom-in">
            <h2>Uncompromising <span>Quality Control</span></h2>
            <p>Every roll leaving our facility is tested for GSM, UV stability, tensile load, and mesh uniformity.
               Our rejection rate is below 0.3% — a standard we have maintained since 2009.</p>
            <div class="cta-banner-btns">
                <a href="{{ route('contact') }}" class="btn-accent">
                    <i class="fa-solid fa-paper-plane"></i> Request Product Samples
                </a>
                <a href="{{ route('products.index') }}" class="btn-outline">
                    <i class="fa-solid fa-layer-group"></i> View Our Products
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
