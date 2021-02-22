<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--    <link rel="stylesheet" href="{{ asset('css/login_snippet.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/bootsnip.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/bootsnip-footer.css') }}">--}}
{{--    <link rel="icon" href="{{ asset('images/FavICON.png') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{--        <link rel="stylesheet" href="{{ asset('js/custom.js') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
{{--    <script type="text/javascript" src="{{asset('js/custom.js') }}"></script>--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    {{--    <script src="//cosde.jquery.com/jquery-1.12.3.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">



    <title>@yield('title')</title>
    @yield('style')
</head>
<body class="bg-img">
{{--@include('Admin.layouts.navbar')--}}
{{--@include('Admin.layouts.sidemenu')--}}

@yield('content')


<div>&nbsp</div>
</body>
@yield('script')
</html>
