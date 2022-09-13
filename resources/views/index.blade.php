@extends('layouts.master')

@section('title', 'Lowongan Kerja')

@section('main')
    <div class="container">
        <h1 class="text-center text-main">Tempat Mencari Kerja</h1>
        <p class="text-center text-main">Temukan loker Jogja terbaru bulan Juni 2021 dengan mudah.</p>

        <div class="bg-white shadow rounded w-50 p-4 m-5 mx-auto">
            <form action="">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Cari Disini">
                    </div>
                    <div class="col">
                        <select class="select" name="area" id="">
                            <option value="0">All Areas</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="select" name="area" id="">
                            <option value="0">All Categories</option>
                        </select>
                    </div>
                </div>
                <button class="btn bg-main rounded m-auto px-5 text-white d-flex mx-auto mt-4" type="submit" >
                    <i class="fa-solid fa-magnifying-glass glass mx-1"></i> Search
                </button>
            </form>
        </div>

        <h2 class="text-center">Rekomendasi Lowongan</h2>
        <div class="owl-carousel loop my-3">
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
            <div class="rounded shadow-lg p-4 list-lowongan">
                <h5 class="text-secondary">Dibutuhkan</h5>
                <h5>Nama Pekerjaan</h5>
                <img class="w-25 m-auto" src="{{asset('images/logo.png')}}" alt="">
                <h5 class="border-bottom p-1">Nama Perusahaan</h5>
                <h5 class="border-bottom p-1">Waktu</h5>
                <h5 class="border-bottom p-1">Lokasi</h5>
            </div>
        </div>
    </div>
@stop

@section('script')
<script>
    $('.loop').owlCarousel({
        center: true,
        items:4,
        loop:true,
        margin:0,
        responsive:{
            600:{
                items:4
            }
        }
    });
</script>
@endsection
