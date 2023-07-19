@extends('template')

@section('main_Content')
    
    <div style="background-image: url('{{ asset('images/bg2.jpg') }}'); " class="container-fluid bg-img d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1>Welcome to Sales Insights Hub</h1>
            <p>Discover Products that are sold together</p>
            <a href="{{ route('salesInsight') }}" class="btn btn-primary">Get Started</a>
        </div>
    </div>  
    
@endsection



