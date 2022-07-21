@extends('layouts.wel')

@section('content')

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Barang</h2>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->
            @foreach($produk as $p)
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset($p->foto)}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">{{$p->namaBarang}}</h2>
                    </div>
                    <div class="left-text">
                        <p>{{$p->keteranganBarang}}</p>
                    </div>
                    
                    <div class="left-text">
                        <p><h6>Stok : </h6>{{$p->stok}}</p>
                    </div>

                     <div class="left-text">
                        <p><h4>Harga : </h4> {{$p->hargaBarang}} </p>
                    </div>

                    <div class="left-text">
                       <a href="#" class="main-button">Whitelist</a>
                       <a href="#" class="main-button">Beli</a>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->


@endsection
