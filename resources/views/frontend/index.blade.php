@extends('frontend.layouts.master')

@section('content')

    <div class="row">
    <div class="col-md-10 col-md-offset-1">
        Hello world
    </div>

    </div><!-- row -->
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop