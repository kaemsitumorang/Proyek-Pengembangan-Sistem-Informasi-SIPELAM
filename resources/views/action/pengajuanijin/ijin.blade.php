@extends('layouts.master')
@section('styles')
<style>
    header,
    main,
    footer {
        padding-left: 240px;
    }
    
    @media only screen and (max-width: 992px) {
        header,
        main,
        footer {
            padding-left: 0;
        }
    }
    
    .side-nav {
        background-color: #F9F6F6;
    }
    
    .side-nav #div-li {
        margin-top: 5em;
    }
</style>
@endsection

@extends('elements.element')
@section('isi-side-nav')
<li><a href="#!"><span class="pink-text text-darken-4">Buat Pengajuan Ijin</span></a></li>
<li><a href="#!"><span class="pink-text text-darken-4">SOP</span></a></li>
@endsection

@section('content')
<ul id="slide-out" class="side-nav fixed">
    <div id="div-li">
        <li><a href="#!"><span class="pink-text text-darken-4">Buat Pengajuan Ijin</span></a></li>
        <li><a href="#!"><span class="pink-text text-darken-4">SOP</span></a></li>
    </div>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
@endsection

@section('script')
<script>
    $(".button-collapse").sideNav();
</script>
@endsection














