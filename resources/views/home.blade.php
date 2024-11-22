@extends('layouts.app')

@section('title', 'Welcome to Soccola')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section text-center" style="background: url('{{ asset('image/top.jpg') }}') no-repeat center/cover; color: white; padding: 100px 0;">
    <div class="container section-title" data-aos="fade-up">
        <h1>Welcome to <span class="text-warning">Soccola</span></h1>
        <p class="lead">Discover Your Beauty Essentials with Our Curated Makeup and Skincare Collections</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about section py-5">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>About Soccola</h2>
                <p>
                    Soccola is your one-stop destination for beauty products tailored to your needs. We bring you a curated selection of makeup and skincare items to enhance your natural beauty. Our mission is to help you feel confident and radiant every day.
                </p>
                <ul>
                    <li><strong>Makeup:</strong> Explore our vibrant collection of lipsticks, foundations, eyeshadows, and more.</li>
                    <li><strong>Skincare:</strong> Discover products that nourish, protect, and hydrate your skin.</li>
                </ul>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('image/skincare1.jpg') }}" alt="About Soccola" class="img-fluid rounded shadow-lg" data-aos="zoom-in">
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="categories section py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h2>View by Categories</h2>
            <p>Find the perfect products for your beauty routine.</p>
        </div>
        <div class="row gy-4">
            <!-- Makeup Category -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="category-box text-center">
                    <img src="{{ asset('image/makeup.jpg') }}" alt="Makeup" class="img-fluid rounded shadow">
                    <h4 class="mt-3">Makeup</h4>
                    <p>From bold lipsticks to flawless foundations, explore products to create your perfect look.</p>
                </div>
            </div>
            <!-- Skincare Category -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="category-box text-center">
                    <img src="{{ asset('image/skincare2.jpg') }}" alt="Skincare" class="img-fluid rounded shadow">
                    <h4 class="mt-3">Skincare</h4>
                    <p>Nourish your skin with our range of moisturizers, serums, and cleansers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section id="cta" class="cta section text-white text-center py-5" style="background: url('{{ asset('image/bottom.jpg') }}') no-repeat center/cover;">
    <div class="container" data-aos="fade-up">
        <h2>Enhance Your Beauty Today</h2>
        <p class="lead">View the best beauty products handpicked for you at Soccola.</p>
    </div>
</section>

@endsection
