@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container mt-5">
        <h2>Showing products for category: {{ $categoryName ?? 'All' }}</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">{{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No products found for "{{ $categoryName }}"</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>