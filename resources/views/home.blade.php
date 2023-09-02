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

  <div class="container mt-5" id="course">
    <h1 class="text-center mb-4">Course</h1>

    <div class="row coursecard">
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
                    <p>Free Course</p>
                  <h5 class="card-title">React JS Tutorials For Beginners</h5>
                  <p class="card-text">React is a free and open-source front-end JavaScript library. This series will cover React from starting to the end. We will learn react from the ground up!</p>
                  <a href="#" class="btn btn-primary mt-4">Start Watching</a>
                </div>
              </div>
        </div>
    </div>

    
  
  </div>

  <div class="container Tutorials" id="tutorials">
    <h1 class="text-center mb-5">Tutorials</h1>
    <div class="row tutocard">
        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">

                <img src="{{asset('img/python.webp')}}" class="card-img-top" alt="...">
                
                <div class="card-body">
                  <h5 class="card-title">Python Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/c.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">C Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/cpp.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">C++ Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/java.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Java Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/js.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Javascript Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>

        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/css.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CSS Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>

        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/php.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PHP Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>

        <div class="col-lg-3">
            <div class="card" style="width: 20rem;">
                <img src="{{asset('img/html.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HTML Tutorial</h5>
                  <a href="#" class="btn btn-primary">Start Learning</a>
                </div>
              
              </div>
        </div>
    </div>
  </div>


  <div class="container testmonials" id="testmonials">
    <h1 class="text-center">Testimonials</h1>
<div class="row">
    <div class="col-lg-6">
        <div class="mycol">
        <h3>,,</h3>
        <p> don't have words to thank this man, I'm really grateful to have this channel and website in my daily routine. If you're a mere beginner, then you can trust this guy and can put your time into his content. I can assure you that it'll be worth it.</p>
        <p class="rk">Mohit Kumar</p>
        <p class="webt">Web Developer</p>
    </div>
    </div>

    <div class="col-lg-6">
        <div class="mycol">
        <h3>,,</h3>
        <p> For everyone who wants to level up their #Coding and #Dev skills - seriously, this channel is for you! Both basic and advanced stacks are covered on this channel, and one can learn according to his skill levels. And the icing on the cake is, everything is available for free.</p>
        <p class="rk">Rakesh Shetty</p>
        <p class="webt">Web Developer</p>
    </div>
    </div>
</div>
  </div>

@endsection