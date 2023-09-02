@extends('layouts.main')

@section('main-section')
<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset('img/img1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('img/img2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/img3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Course</h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/course1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p>Free Course</p>
                  <h5 class="card-title">Python Tutorials - 100 Days of Code</h5>
                  <p class="card-text">Python is one of the most demanded programming languages in the job market. Surprisingly, it is equally easy to learn and master Python. Let's commit our 100 days of code to python!</p>
                  <a href="#" class="btn btn-primary">Start Watching</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/course2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                     <p>Free Course</p>
                  <h5 class="card-title">Ultimate JavaScript Course</h5>
                  <p class="card-text">This latest JavaScript course comes with premium curriculum that covers everything from basics to advance. On top of that, you will get my handwritten notes of JS for completely free. What are you waiting for? Just Enroll Buddy</p>
                  <a href="#" class="btn btn-primary">Start Watching</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/course3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
  
  </div>

@endsection