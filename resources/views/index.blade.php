@extends('layouts.master')

@section('title', 'Lowongan Kerja')

@section('main')
    <div class="container">
        <p>This is my body content.</p>

        <div class="owl-carousel loop">
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
            <div class="bg-success"> Your Content </div>
        </div>
    </div>
@stop

@section('script')
<script>
    $('.loop').owlCarousel({
        center: true,
        items:2,
        loop:true,
        margin:10,
        responsive:{
            600:{
                items:4
            }
        }
    });
</script>
@endsection
