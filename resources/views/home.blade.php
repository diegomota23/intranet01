@extends('layouts.app')

@section('links')
<link href="{{ asset('varial/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('varial/css/jquery-ui.css') }}" rel="stylesheet">
<script type="text/javascript" src="<?php echo asset('varial/jquery-ui.js') ?>"></script>

<script>
$( function() {
    $( "#datepicker" ).datepicker();
  } );
  
  /* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "../widgets/datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}( function( datepicker ) {

datepicker.regional[ "pt-BR" ] = {
	closeText: "Fechar",
	prevText: "&#x3C;Anterior",
	nextText: "Próximo&#x3E;",
	currentText: "Hoje",
	monthNames: [ "Janeiro","Fevereiro","Março","Abril","Maio","Junho",
	"Julho","Agosto","Setembro","Outubro","Novembro","Dezembro" ],
	monthNamesShort: [ "Jan","Fev","Mar","Abr","Mai","Jun",
	"Jul","Ago","Set","Out","Nov","Dez" ],
	dayNames: [
		"Domingo",
		"Segunda-feira",
		"Terça-feira",
		"Quarta-feira",
		"Quinta-feira",
		"Sexta-feira",
		"Sábado"
	],
	dayNamesShort: [ "Dom","Seg","Ter","Qua","Qui","Sex","Sáb" ],
	dayNamesMin: [ "Dom","Seg","Ter","Qua","Qui","Sex","Sáb" ],
	weekHeader: "Sm",
	dateFormat: "dd/mm/yy",
	firstDay: 0,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: "" };
datepicker.setDefaults( datepicker.regional[ "pt-BR" ] );

return datepicker.regional[ "pt-BR" ];

} ) );
</script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container-meio">
                    <div class="corpo">
                        <div class="fundo-meio"></div>

                        <!--conteudo da lateral esquerda-->
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
                        <!--conteudo do menu nav-->
                        <div class="content-direito">
                            <div class="menu-navegacao">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="pri"><a href="#">TML</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">About</a></li>        
                                </ul>
                            </div>
                            <!--fim do conteudo menu  nav-->
                            <div class="content-meio">
                                <div class="meio"></div>
                                <!--  conteudo do menu direito-->
                                <div class="menu-direito">
                                    <table class="t-funcoes">
                                        <tr>
                                            <th class="suporte"></th>
                                            <th class="patrimonio"></th>
                                            <th class="almoxarifado"></th>
                                        </tr>
                                        <tr>
                                            <th class="lista-tel"></th>
                                            <th class="email"></th>
                                        </tr>
                                    </table>
                                        Date: <div id="datepicker"></div>
                                </div>
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
