@extends('layouts.app')
@section('content')
    <h1>Welcome to the Home Page</h1>

    <h2>Category</h2>
    <a href="{{ route('food-beverage') }}" class="btn btn-primary">Show food beverage</a>
    <a href="{{ route('beauty-health') }}" class="btn btn-primary">Show beauty health</a>
    <a href="{{ route('home-care') }}" class="btn btn-primary">Show home care</a>
    <a href="{{ route('baby-kid') }}" class="btn btn-primary">Show Baby Kid</a>

    <h2>User</h2>
    <a href="{{ route('user-profile', ['id' => 10, 'name' => 'Nurul Mustofa']) }}" class="btn btn-info">Show Profile</a>

    <h2>Penjualan</h2>
    <a href="{{ route('penjualan') }}" class="btn btn-info">Show Penjualan</a>
@endsection
