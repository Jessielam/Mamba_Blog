@inject('systemPresenter','App\Presenters\SystemPresenter')

@extends('layouts.app')

@section('title',$systemPresenter->getKeyValue('title'))

@section('description',$systemPresenter->getKeyValue('seo_desc'))

@section('keywords',$systemPresenter->getKeyValue('seo_keyword'))

@section('header-text')
    <div class="text-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="to-animate fadeInUp animated color-white">
                    <i class="glyphicon glyphicon-search"></i>
                    &nbsp;
                    {{ $systemPresenter->getKeyValue('motto') }}
                </h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="gtco-maine">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <article class="mt-negative">
                        <div class="text-left content-article">
                            <div class="row">
                                <div class="col-lg-8 cp-r animate-box">
                                    @foreach($archives as $archive)
                                    <h2>{{date('Y',strtotime($archive->created_month))}}</h2>
                                    <h3>{{date('m',strtotime($archive->created_month))}}</h3>
                                        @foreach($archive->articles as $article)
                                        <ul>
                                            <li><a style="color: #428bca" href="{{ route('article',['id'=>$article->id]) }}" target="_blank">{{date('m-d',strtotime($article->created_at))}} - {{$article->title}}</a></li>
                                        </ul>
                                        @endforeach
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection