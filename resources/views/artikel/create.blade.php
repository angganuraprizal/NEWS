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
    <script src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>

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
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                        </ol>
                    </nav>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kategori</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                                {{csrf_field()}}

                                <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
                                    <label class="control-label mb-10">Kategori</label>
                                    <select name="kategori_id" class="form-control">
                                        <option class="txt-grey" disabled selected>-- Pilih Kategori --</option>
                                        @foreach($kategoris as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('kategori_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kategori_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                                    <label class="control-label mb-10">Judul</label>
                                    <input type="text" name="judul" class="form-control"  required>
                                    @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                                    <label class="control-label mb-10">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                    @if ($errors->has('foto'))
                                        <img src="{{ asset('/img/artikel/'.$artikels->foto) }}" alt="">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                                    <label class="control-label mb-10">Isi</label>
                                    <textarea id="text" type="ckeditor" name="isi" class="ckeditor" required></textarea>
                                    @if ($errors->has('isi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('isi') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="pull-right">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-rounded"><i class="fa fa-check">&nbsp;</i>Simpan</button>
                                        <button type="reset" class="btn btn-danger btn-rounded"><i class="fa fa-spin fa-refresh"></i>&nbsp;Reset</button>
                                    </div>
                                </div>
                            </form>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>