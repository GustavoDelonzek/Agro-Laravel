<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>@yield('title', 'Agricultura')</title>
    <style>
        body {
    background-color: #f8f9fa; 

}

    .link-criar{
        text-decoration: none;
    }

    .card-produto{
        
        border-left: 12px solid #00712D;
        border-radius: 14px 6px 6px 14px;
        -webkit-border-radius: 14px 6px 6px 14px;
        -moz-border-radius: 14px 6px 6px 14px;
        background: rgba(255, 255, 255, 0.75);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        
        
    }

    


</style>
</head>
<body class="container ">
    
    <main class="px-5">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
