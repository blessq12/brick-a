@extends('layout/main')

@section('main_content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1>Index page</h1>
            <h2>Content section</h2>
            <a href="{{ route('index') }}" class="btn btn-primary">button</a>
            <a href="{{ route('slug') }}" class="btn btn-primary">button</a>
        </div>
    </div>
</div>
@endsection