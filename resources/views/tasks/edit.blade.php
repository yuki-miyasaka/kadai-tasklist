@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} のタスクリスト編集ページ</h1>

    {!! Form::model($tasklist, ['route' => ['tasklist.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスクリスト:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection