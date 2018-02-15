@extends('layouts.app')

@section('links')
<link href="{{ asset('varial/css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container-meio">
                    <div class="corpo">
                        <div class="content-esquerdo">
                            <a href="#"><img src="{{ asset('img/home/') }}"></a> 
                        </div>
                        <div class="content-direito">
                            <div class="menu-navegacao"></div>
                            <div class="content-meio">
                                <div class="meio"></div>
                                <div class="menu-direito"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rodape"></div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
