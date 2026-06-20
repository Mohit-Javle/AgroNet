@extends('layouts.frontend')

@section('title', $product->name . ' — AgroNet Solutions')
@section('meta_description', Str::limit($product->short_description, 160))

@section('content')

<section class="page-banner" aria-label="Product detail banner">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $product->name }}</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                <li class="active">{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</section>

<section class="product-detail-section pt-80 pb-100" aria-label="Product details">
    <div class="container">
        <div class="product-detail-grid">

            {{-- Gallery --}}
            <div data-aos="fade-right">
                <div class="product-gallery-main">
                    @if($product->images && count($product->images) > 0)
                    <img src="{{ asset('storage/' . $product->images[0]) }}"
                         alt="{{ $product->name }} — AgroNet Solutions product image"
                         id="product-main-img">
                    @elseif($product->slug === '35-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-35.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->slug === '50-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-50.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->slug === '75-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-75.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->slug === 'construction-debris-safety-net')
                    <img src="{{ asset('assets/img/products/debris-safety-net.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->slug === 'greenhouse-poly-net-40-percent')
                    <img src="{{ asset('assets/img/products/greenhouse-net.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->slug === 'poultry-farm-shade-net')
                    <img src="{{ asset('assets/img/products/poultry-net.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->category && $product->category->slug === 'bird-protection-net')
                    <img src="{{ asset('assets/img/products/bird-net.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @elseif($product->category && $product->category->slug === 'hdpe-woven-fabric')
                    <img src="{{ asset('assets/img/products/woven-fabric.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @else
                    <img src="{{ asset('assets/img/products/shade-net.png') }}"
                         alt="{{ $product->name }} — AgroNet Solutions"
                         id="product-main-img">
                    @endif
                </div>
                @if($product->images && count($product->images) > 1)
                <div style="display: flex; gap: 10px; margin-top: 12px;">
                    @foreach($product->images as $img)
                    <div style="width: 80px; height: 80px; border-radius: 4px; overflow: hidden; cursor: pointer; border: 2px solid var(--border);"
                         onclick="document.getElementById('product-main-img').src='{{ asset('storage/' . $img) }}'">
                        <img src="{{ asset('storage/' . $img) }}" alt=""
                             style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Product Info --}}
            <div data-aos="fade-left" data-aos-delay="100">
                <p class="product-detail-cat">{{ $product->category->name ?? '' }}</p>
                <h1 class="product-detail-title">{{ $product->name }}</h1>
                <p class="product-detail-desc">{{ $product->description }}</p>

                {{-- Quick Specs --}}
                @if($product->shade_percentage || $product->width || $product->gsm)
                <div style="display: flex; gap: 16px; margin-bottom: 28px; flex-wrap: wrap;">
                    @if($product->shade_percentage && $product->shade_percentage !== 'N/A')
                    <div class="spec-highlight-box">
                        <strong>{{ $product->shade_percentage }}</strong>
                        <span>Shade</span>
                    </div>
                    @endif
                    @if($product->width)
                    <div class="spec-highlight-box">
                        <strong>{{ $product->width }}</strong>
                        <span>Width</span>
                    </div>
                    @endif
                    @if($product->gsm)
                    <div class="spec-highlight-box">
                        <strong>{{ $product->gsm }}</strong>
                        <span>GSM</span>
                    </div>
                    @endif
                </div>
                @endif

                {{-- Specifications Table --}}
                @if($product->specifications && count($product->specifications) > 0)
                <p class="product-specs-title">Technical Specifications</p>
                <table class="specs-table specs-table--zebra">
                    @foreach($product->specifications as $key => $value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                </table>
                @endif

                {{-- Actions --}}
                <div class="product-detail-actions">
                    <a href="{{ route('contact') }}?product={{ urlencode($product->name) }}&category={{ urlencode($product->category->name ?? '') }}" class="btn-primary">
                        <i class="fa-solid fa-magnifying-glass"></i> Request a Quote
                    </a>
                    <a href="tel:+917923456789" class="btn-outline btn-phone-outline">
                        <i class="fa-solid fa-phone"></i> +91 79 2345 6789
                    </a>
                </div>

                {{-- Certifications note --}}
                <div class="cert-note-card">
                    <p>
                        <i class="fa-solid fa-shield-halved" style="color: var(--primary); margin-right: 6px;"></i>
                        All products are manufactured in our ISO-certified facility and tested for UV resistance, tensile strength, and GSM compliance before dispatch.
                    </p>
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        @if($relatedProducts->count() > 0)
        <div style="margin-top: 80px; padding-top: 60px; border-top: 1px solid var(--border);">
            <div style="margin-bottom: 36px;">
                <span class="section-tag">From the Same Category</span>
                <h2 class="section-title" style="font-size: 24px;">Related Products</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                @foreach($relatedProducts as $related)
                <div class="product-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="product-card-thumb" style="height: 180px;">
                        @if($related->images && count($related->images) > 0)
                        <img src="{{ asset('storage/' . $related->images[0]) }}" alt="{{ $related->name }}">
                        @else
                        <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $related->name }}">
                        @endif
                    </div>
                    <div class="product-card-body" style="padding: 16px 18px;">
                        <h3 style="font-size: 14px;">{{ $related->name }}</h3>
                        <a href="{{ route('products.show', $related->slug) }}"
                           class="category-card-link" style="margin-top: 10px;">
                            View Details <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection
