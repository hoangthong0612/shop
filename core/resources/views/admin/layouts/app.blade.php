@extends('admin.layouts.master')

@section('content')
        @include('admin.partials.header')
        @include('admin.partials.sidenav')

        <main id="main" class="main">
            @yield('panel')
        </main><!-- End #main -->



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
