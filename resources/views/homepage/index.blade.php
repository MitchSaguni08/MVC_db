@extends('homepage.layout')
@section('content')

<section id="team" class="team">
  <div class="container">

    <div class="section-title">
      <h2>Team</h2>
      <h3>Our Hardworking <span>Team</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">
      @foreach ($team as $list)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="{{ $list['image'] }}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>{{ $list['name'] }}</h4>
            <span>{{ $list['position'] }}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Team Section -->

@endsection