<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <title>Document</title>
</head>
@livewireStyles
<body class="hold-transition sidebar-collapse layout-fixed">
    <div class="content">
        <div class="content">
            {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item" id="1" onclick="coladi()">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/Admin" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <form action="/Admin/System/" method="get">
                            <a href="/Admin/System/" onclick="this.parentNode.submit()" class="nav-link">
                                Daerah
                            </a>
                        </form>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <form action="/Admin/faq/" method="get">
                            <a href="/Admin/faq/" onclick="this.parentNode.submit()" class="nav-link">
                                UMKM
                            </a>
                        </form>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="logout">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <a href="/logout" class="dropdown-item">Logout </a>
                            </span>
                        </div>
                    </li>
                </ul>
            </nav> --}}
            @livewire('kecamatan')
        </div>
    </div>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505304.7870666422!2d115.06478540996356!3d-8.33320725356976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21e398e4623fd%3A0x3030bfbca7cbef0!2sKabupaten%20Bangli%2C%20Bali!5e0!3m2!1sid!2sid!4v1641364579044!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  --}}
    @livewireScripts
</body>


<script async src="https://maps.googleapis.com/maps/api/js?libraries=places,visualization&key=YOUR_API_KEY&v=weekly&callback=initMap">
</script>
</html>
