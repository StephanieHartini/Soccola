@extends('layouts.app')

@section('title', 'Category Results')

@section('content')
<section id="categories" class="categories section py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h2>Shop by Categories</h2>
            <p>Find the perfect products for your beauty routine.</p>
        </div>
        <div class="row gy-4">
            <!-- Makeup Category -->
            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="category-box text-center p-4 rounded shadow" style="transition: transform 0.3s ease;">
                    <img src="path-to-your-image/makeup-category.png" alt="Makeup" class="img-fluid mb-3">
                    <h4>Makeup</h4>
                    <p>From bold lipsticks to flawless foundations, explore products to create your perfect look.</p>
                    <a href="/products/makeup" class="btn btn-primary">View Makeup</a>
                </div>
            </div>
            <!-- Skincare Category -->
            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="category-box text-center p-4 rounded shadow" style="transition: transform 0.3s ease;">
                    <img src="path-to-your-image/skincare-category.png" alt="Skincare" class="img-fluid mb-3">
                    <h4>Skincare</h4>
                    <p>Nourish your skin with our range of moisturizers, serums, and cleansers.</p>
                    <a href="/products/skincare" class="btn btn-secondary">View Skincare</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact Us</h5>
                <p>Email: support@soccola.com | Phone: +123 456 789</p>
            </div>
            <div class="col-md-6">
                <h5>Follow Us</h5>
                <a href="#" class="btn btn-outline-light btn-sm mx-1">Facebook</a>
                <a href="#" class="btn btn-outline-light btn-sm mx-1">Instagram</a>
                <a href="#" class="btn btn-outline-light btn-sm mx-1">Twitter</a>
            </div>
        </div>
        <p class="mt-4">&copy; 2024 Soccola. All Rights Reserved.</p>
    </div>
</footer>

@endsection