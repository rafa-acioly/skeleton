@extends('back::layout.app')

@section('page-name', 'documents images')

@section('page-title')
    <h1>{{ trans('back::documents.images.title') }}</h1>
@stop

@section('page-actions')
    <a href="#" class="btn btn-flat btn-default" data-toggle="modal" data-target="#newImage">
        <i class="fa fa-plus"></i> {{ _ucwords(trans('back::dictionary.new')) }}
    </a>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if ($records->count())
                <div id="grid" data-columns>
                    @foreach($records as $record)
                        <div class="image">
                            <img src="{{ $record->image }}" class="img-responsive"/>

                            <p class="tags">
                                @foreach($record->tags() as $tag)
                                    <span class="badge">{{ $tag }}</span>
                                @endforeach
                            </p>

                            <div class="actions">
                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">{{ _ucwords(trans('back::dictionary.no-records')) }}</p>
            @endif
        </div>
    </div>

    @include('back::documents.images.new')
@stop