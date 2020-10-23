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
</div>
<div class="container-fluid">
    <div class="row">
        <div class="mb-5 col-sm-4 offset-sm-4" style="border:2px solid red;border-radius:150px">
           <h1 style="color:red;font-weight:bold;text-shadow:2px 2px green" class="text-center">School Vision</h1>
           <div class="container mb-5 text-center text-white bg-success">
            Make Shamata Girls A Center of Excellence
           </div>
        </div>
    </div>
    <div class="row">
        <div class="mb-5 col-sm-4 offset-sm-4" style="border:2px solid red;border-radius:150px">
           <h1 style="color:red;font-weight:bold;text-shadow:2px 2px green" class="text-center">School Mission</h1>
           <div class="container mb-5 text-center text-white bg-success" style="font-weight:bold">
            Equip the Learners Fit in  A competitive World
           </div>
        </div>
    </div>
</div>
@stop
