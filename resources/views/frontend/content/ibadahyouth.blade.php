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
                        <li class="breadcrumb-item active" aria-current="page">Ibadah Youth</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog details part start -->
    <section class="blog-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <article class="post">

                        <!-- Post Content -->
                        <div class="post-content text-center">
                            <h2 style="color: #134A6D; font-weight: bold;">Ibadah Youth</h2>
                            <div class="post-image mb-5">
                                <img loading="lazy" class="img-fluid w-100" src="{{ asset('assets-fe/assets/theme/images/about/j1.jpg') }}" alt="post-image">
                            </div>
                            <p>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum. Seper spiciatis
                                unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem. aperiam
                                eaque ipsa quae
                                ab illo inventore veritatis.</p>


                            <h2 style="color: #134A6D; font-weight: bold;">Jadwal</h2>
                        </div>
                    </article>
                </div>
            </div> <!-- end container -->

            <div class="row justify-content-center">
                <div class="col-12">
                    <section class="intro" style="background-color: white;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card mask-custom">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover text-black mb-0">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">PELAYANAN</th>
                                                            <th scope="col">IBADAH RAYA I</th>
                                                            <th scope="col">IBADAH RAYA II</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Worship Leader</th>
                                                            <td>Naomi</td>
                                                            <td>Naomi</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Singers</th>
                                                            <td>Joko Dan Jaki</td>
                                                            <td>Jika Dan Jika</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Penari Tamborin</th>
                                                            <td>Shelyn, Dimas, Dan Tedis</td>
                                                            <td>Gabriel, Tedis, Dan Tedis</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Keyboardis</th>
                                                            <td>Elexi</td>
                                                            <td>Falen</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gitaris</th>
                                                            <td>Dimas, Naomi</td>
                                                            <td>Pak Eka, Bu Yuan</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bassis</th>
                                                            <td>Elexi, Tedis</td>
                                                            <td>Dimas, Naomi</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Drummer</th>
                                                            <td>Dimas, Tedis</td>
                                                            <td>Pak Dino, Gabriel</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pelayan Persembahan</th>
                                                            <td>Gabriel, Tedis</td>
                                                            <td>Naomi, Falensia</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Front Greeter</th>
                                                            <td>Pak Bastaman, Pak Eka</td>
                                                            <td>Gabriel, Rekarius</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Doa Syafaat</th>
                                                            <td>Pak Binuko, Tedis </td>
                                                            <td>Gabriel, Jiro</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Perjamuan Kudus</th>
                                                            <td>Dimas, Falensia</td>
                                                            <td>Pak Dino, Pak Bastaman</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
