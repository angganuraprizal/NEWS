<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    DevFolio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kategori')}}">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/artikel')}}">Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb primary">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                        </ol>
                    </nav>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Artikel</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('artikel.create') }}">
                                <button class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" title="Tambah" data-toggle="tooltip" data-placement="top">
                                    <i class="fa fa-plus-circle"></i>
                                    <span class="btn-text">Tambah</span>
                                </button>
                            </a>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <head>
                                            <tr>
                                                <td>NO</td>
                                                <td>Kategori</td>
                                                <td>Foto</td>
                                                <td>Judul</td>
                                                <td>isi</td>
                                                <td>Action</td>
                                            </tr>
                                        </head>
                                        <body>
                                            @php $no = 1; @endphp
                                            @foreach($artikels as $data)
                                            <tr>
                                                <td> {{ $no++ }} </td>
                                                <td> {{ $data->kategori->nama }} </td>
                                                <td>
                                                    <img src="{{ $data->foto }}" width="70" height="70">
                                                </td>
                                                <td> {!! str_limit($data->judul,50) !!} </td>
                                                <td> {!! str_limit($data->isi,50) !!} </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!-- Edit -->
                                                            <a href="{{ route('artikel.edit',$data->id) }}">
                                                                <button class="btn btn-sm btn-outline-info m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air">
                                                                    <i class="fa fa-edit"></i>
                                                                    <span>Edit</span>
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!-- Delete -->
                                                            <form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                                                                <input type="hidden" name="_method" value="Delete">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <button type="submit" class="btn btn-sm btn-outline-danger m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air">
                                                                    <i class="fa fa-trash-o"></i>
                                                                    <span>Hapus</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </body>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>