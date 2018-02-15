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
                        <div class="fundo-meio"></div>

<!--                        conteudo da lateral esquerda-->
                        <div class="content-esquerdo">
                            <a href="#"><img class="slogan" src="{{ asset('varial/img/home/slogan.png') }}"></a> 
                            <a href="#"><img class="moca" src="{{ asset('varial/img/home/moca.png') }}"></a> 
                            <ul class="nav nav-pills nav-stacked" role="tablist">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">About</a></li>        
                            </ul>
                        </div>
<!--fim do conteudo da lateral esquerda-->
                        <div class="content-direito">
                            <div class="menu-navegacao">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#">TML</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">About</a></li>        
                                </ul>
                            </div>
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
