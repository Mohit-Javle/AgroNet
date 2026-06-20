@extends('layouts.frontend')

@section('title', isset($category) ? $category->name . ' — Products' : 'All Products')
@section('meta_description', 'Browse AgroNet Solutions complete range of HDPE shade nets, agricultural nets, greenhouse nets and construction safety nets.')

@section('content')

<section class="page-banner" aria-label="Products page banner">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ isset($category) ? $category->name : 'Our Products' }}</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                @if(isset($category))
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                <li class="active">{{ $category->name }}</li>
                @else
                <li class="active">Products</li>
                @endif
            </ul>
        </div>
    </div>
</section>

<section class="products-page pt-80 pb-100" aria-label="Product listing">
    <div class="container">

        {{-- Search Bar --}}
        <div class="search-container" data-aos="fade-up">
            <form action="{{ isset($category) ? route('category.show', $category->slug) : route('products.index') }}" method="GET" class="search-form">
                <div class="search-input-group">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search products by name, specifications or description...">
                </div>
                <button type="submit" class="search-submit-btn">
                    <i class="fa-solid fa-search"></i> Search
                </button>
                @if(!empty($search))
                <a href="{{ isset($category) ? route('category.show', $category->slug) : route('products.index') }}" class="filter-btn" style="display: inline-flex; align-items: center; justify-content: center; height: 46px; border-radius: var(--radius); line-height: 46px; border: 1.5px solid var(--border); background: #fff; padding: 0 16px;">
                    Clear
                </a>
                @endif
            </form>
        </div>

        {{-- Category Filters --}}
        <div class="products-filter" data-aos="fade-up">
            <a href="{{ route('products.index') }}{{ !empty($search) ? '?search=' . urlencode($search) : '' }}"
               class="filter-btn {{ !isset($category) ? 'active' : '' }}">
                All Products
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('category.show', $cat->slug) }}{{ !empty($search) ? '?search=' . urlencode($search) : '' }}"
               class="filter-btn {{ isset($category) && $category->id === $cat->id ? 'active' : '' }}">
                {{ $cat->name }}
            </a>
            @endforeach
        </div>

        {{-- Products Grid --}}
        @if($products->count() > 0)
        <div class="products-list-grid">
            @foreach($products as $product)
            <div class="product-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 60 }}">
                <div class="product-card-thumb">
                    @if($product->images && count($product->images) > 0)
                    <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}">
                    @elseif($product->slug === '35-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-35.png') }}" alt="{{ $product->name }}">
                    @elseif($product->slug === '50-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-50.png') }}" alt="{{ $product->name }}">
                    @elseif($product->slug === '75-percent-green-shade-net')
                    <img src="{{ asset('assets/img/products/shade-net-75.png') }}" alt="{{ $product->name }}">
                    @elseif($product->slug === 'construction-debris-safety-net')
                    <img src="{{ asset('assets/img/products/debris-safety-net.png') }}" alt="{{ $product->name }}">
                    @elseif($product->slug === 'greenhouse-poly-net-40-percent')
                    <img src="{{ asset('assets/img/products/greenhouse-net.png') }}" alt="{{ $product->name }}">
                    @elseif($product->slug === 'poultry-farm-shade-net')
                    <img src="{{ asset('assets/img/products/poultry-net.png') }}" alt="{{ $product->name }}">
                    @elseif($product->category && $product->category->slug === 'bird-protection-net')
                    <img src="{{ asset('assets/img/products/bird-net.png') }}" alt="{{ $product->name }}">
                    @elseif($product->category && $product->category->slug === 'hdpe-woven-fabric')
                    <img src="{{ asset('assets/img/products/woven-fabric.png') }}" alt="{{ $product->name }}">
                    @else
                    <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $product->name }}">
                    @endif
                    @if($product->is_featured)
                    <span class="product-card-badge"><i class="fa-solid fa-star"></i> Popular</span>
                    @endif
                </div>
                <div class="product-card-body">
                    <p class="product-card-cat product-cat-tag">{{ $product->category->name ?? '' }}</p>
                    <h3>{{ $product->name }}</h3>
                    <p>{{ Str::limit($product->short_description, 90) }}</p>
                    <div class="product-card-footer">
                        <div class="product-card-spec">
                            @if($product->shade_percentage && $product->shade_percentage !== 'N/A')
                            <strong>{{ $product->shade_percentage }}</strong> Shade
                            @else
                            <strong>{{ $product->gsm ?? '' }}</strong>
                            @endif
                        </div>
                        <a href="{{ route('products.show', $product->slug) }}"
                           class="product-card-link"
                           aria-label="View {{ $product->name }} details">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($products->hasPages())
        <div style="margin-top: 48px; text-align: center;">
            {{ $products->links() }}
        </div>
        @endif

        @else
        <div style="text-align: center; padding: 80px 0; color: var(--text-muted);">
            <i class="fa-solid fa-box-open" style="font-size: 48px; color: var(--border); display: block; margin-bottom: 16px;"></i>
            <h3 style="font-size: 20px; color: var(--secondary); margin-bottom: 8px;">No products found</h3>
            <p>Products in this category are being updated. Please check back shortly.</p>
            <a href="{{ route('products.index') }}" class="btn-primary" style="margin-top: 24px; display: inline-flex;">
                View All Products
            </a>
        </div>
        @endif

    </div>
</section>

@endsection
