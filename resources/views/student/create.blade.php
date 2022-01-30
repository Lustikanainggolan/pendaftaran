@extends('layout.app')

@section('content')
    <div class="row">
	    <div class="col-lg-12 margin-tb">
		    <div class="pull-left">
	            <h2>add new students</h2>
            </div>
            <div class="pill-right">
	          <a class="btn btn-primary"href="{{ route('srudents.index') }}">back</a>
            </div>
        </div>
    </div>

    @if ($errors=>any())
        <div class="alert alert-danger">
            <strong>whoops!</strong> there were some problems with your input.<br><br>
            <ul>
             @foreach ($errors->all() as $error)
	            <li>{{$error}}</li>
             @endforeach
             </ul>
        </div>

    @endif

    <form action="{{route('students.store')}}"method="POST">
         @csrf
        <div clas="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
	             <strong>nama:</strong>
	               <input type="text" nama="Nama" class="from-control" placeholder="Nama">

                 </div>
             </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
	            <strong>kursus:</strong>
            	<input type="text" nama="kursus" class="from-control" placeholder="kursus">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
            	<strong>biaya:</strong>
	            <input type="text" nama="biaya" class="from-control" placeholder="biaya">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	        <button type="submit"class="btn btn-primary">submit</button>
        </div>
    </form>

@endsection
