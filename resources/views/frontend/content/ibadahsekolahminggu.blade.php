@extends('frontend/layout/main')

@section('content')
    <!--
            End Fixed Navigation
            ==================================== -->

    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog Single</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('service')}}" class="text-white">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ibadah Sekolah Minggu</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color: #134A6D; font-weight: bold;">Ibadah Sekolah Minggu</h2>
                </div>
                <div class="col-md-6"
                    style="padding: 20px 30px; display: flex; align-items: center; justify-content: center;">
                    <img loading="lazy" class="img-fluid" src="{{ asset('assets-fe/assets/theme/images/about/j2.jpg') }}"

                    alt="Meghna"
                        style="border-top-right-radius: 130px; width: 100%; max-width: 100%; height: 300px; object-fit: cover;">
                </div>
                <div class="col-md-6" style="padding: 20px 30px; display: flex; align-items: center;">
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam
                        dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo
                        accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati
                        dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam
                        dolores assumenda velLorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit
                        voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium
                        saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam
                        aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates?
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="padding: 20px 30px; display: flex; align-items: center;">
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam
                        dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo
                        accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati
                        dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam
                        dolores assumenda velLorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit
                        voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium
                        saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam
                        aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates?
                    </p>
                </div>
                <div class="col-md-6"
                    style="padding: 20px 30px; display: flex; align-items: center; justify-content: center;">
                    <img loading="lazy" class="img-fluid" src="{{ asset('assets-fe/assets/theme/images/about/j1.jpg') }}"
                        alt="Meghna"
                        style="border-top-left-radius: 130px; width: 100%; max-width: 100%; height: 300px; object-fit: cover;">
                </div>
                <a class="btn btn-main" href="{{route('schedule')}}">Lihat Jadwal</a>
            </div>
        </div>
    </section>
