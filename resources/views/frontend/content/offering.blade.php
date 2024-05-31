@extends('frontend.layout.main')

@section('content')
    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area"
            style="background-image: url({{ asset('assets-fe/assets/theme/images/persembahann.png') }});width: 100%; height: 600px;">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".1"
                        style="font-size: 128px; font-family: 'Zen Antique Soft', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                        <span
                            style="font-size: 96px; font-family: 'Cormorant Garamond', serif; font-weight: normal; margin-bottom: 10px;">OFFERING</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding: 20px;">
        <div class="row">
            <!-- Bagian 1 -->
            <div class="col-md-6" style="padding: 70px;">
                <h1 style="font-size: 26px; font-weight: bold; padding: 10px; color: #134A6D;">“Hendaklah masing-masing
                    memberikan menurut kerelaan hatinya, jangan dengan sedih hati atau karena paksaan, sebab Allah mengasihi
                    orang yang memberi dengan sukacita.”</h1>
                <h1 style="font-size: 26px; font-weight: bold; padding: 10px; color: #134A6D;">-2 Korintus 9:7</h1>
                <a href="#" id="showModal" class="btn btn-primary"
                    style="background-color: #053858; color: #fff; padding: 15px 50px; border-radius: 30px; font-size: 1.2rem; border: none;">QRIS</a>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('assets-fe/assets/theme/images/QR.jpg') }}" alt="QRIS"
                                    style="border-radius: 30px; width: auto; max-width: 100%; height: 600px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function() {
                        $("#showModal").click(function() {
                            console.log("Hi");
                            $("#modal-default").modal('show');
                        });
                    });
                </script>
            </div>
            <!-- Bagian 2 -->
            <div class="col-md-6" style="padding: 100px;">

                <p style="padding: 10px;">
                    <strong style="font-size: 24px; color: #134A6D;">Persembahan</strong><br>
                    0923123921231
                    <br>BCA- GPdI Bethany Pekanbaru
                </p>
                <p style="padding: 10px;">
                    <strong style="font-size: 24px; color: #134A6D;">Janji Iman</strong>
                    <br>
                    0923123921231<br>
                    BCA- GPdI Bethany Pekanbaru
                </p>
            </div>
        </div>
    </div>
@endsection
