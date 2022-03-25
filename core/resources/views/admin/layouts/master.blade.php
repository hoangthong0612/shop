<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$pageTitle ?? ''}}</title>
    <!-- site favicon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('style-lib')

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">


    @stack('style')
</head>
<body>
@yield('content')






<!-- Vendor JS Files -->
<script src="{{ asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/quill/quill.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/admin/js/main.js')}}"></script>

 @stack('script')

</body>
</html>
