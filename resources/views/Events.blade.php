  @extends('master')
  @section('content')
  
  <!-- Causes Start -->
  <div class="container-xxl py-5">
    <div class="container">
       
      <div
        class="text-center mx-auto mb-5 wow fadeInUp"
        data-wow-delay="0.1s"
        style="max-width: 500px"
      >
        <div
          class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3"
        >
          Feature Causes
        </div>
        <h1 class="display-6 mb-5">
          Every Child Deserves The Opportunity To Learn
        </h1>
      </div>
      <div class="row g-4 justify-content-center"> 
        @foreach ($events as $event)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div
            class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100"
          >
            <div class="text-center p-4 pt-0">
              <div
                class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4"
              >
                <small>{{ $event->date }}</small>
              </div>
              <h5 class="mb-3">{{ $event->name }}</h5>
              <p>
                {{ $event->location }}
              </p>
              <div class="causes-progress bg-white p-3 pt-2">
                <div class="d-flex justify-content-between">
                  <p class="text-dark">
                    $10,000 <small class="text-body">Goal</small>
                  </p>
                  <p class="text-dark">
                    $9,542 <small class="text-body">Raised</small>
                  </p>
                </div>
                <div class="progress">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="90"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  >
                    <span>90%</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-relative mt-auto">
              <img class="img-fluid" src="img/courses-1.jpg" alt="" />
              <div class="causes-overlay">
                <a class="btn btn-outline-primary" href="/eventDescription/{{ $event->id }}">
                  Read More
                  <div
                    class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2"
                  >
                    <i class="fa fa-arrow-right"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
           @endforeach
      </div>
    </div>
  </div>
  <!-- Causes End -->
  @endsection