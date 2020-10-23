@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- Start: Nice breadcrumb -->
    <ol class="breadcrumb">
        <li class="home"><a href="#"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="#">Vacancy</a></li>
        <li></li>
        <li class="active"></li>
    </ol>
    <!-- End: Nice breadcrumb -->
</div>
<div class="container-fluid">
    <!-- Start: Paralax Hero Banner -->
    <div class="jumbotron hero-technology">
        <h1 class="hero-title">Shamata Girls Vacancies</h1>
        <p class="hero-subtitle">
            We advocate for equality and nobody is entitled to favorism in any of our available vacancies. The School is a corruption free zone.
        </p>
    </div>
    <!-- End: Paralax Hero Banner -->
</div>
<div class="container-fluid">
    <div class="alert alert-success" role="alert"><span class="text-capitalize"><strong>Sorry</strong>. There are no vacancies posted as of Now. Kindly Check with Us Later</span></div>
</div>
<div class="container-fluid"></div>
<div class="container-fluid"></div>
@stop
