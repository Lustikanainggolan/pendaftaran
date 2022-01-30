@extends('layout.app')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
	            <a class="btn btn-primary"href="{{ route('studends.index')}}">back</a>
            </div>
     </div>
    </div>


    @if($errors->any())
	    <div class="alert alert-danger">
	        <strong>Whoops!</strong> there were some problems with your input.<br><br>
	        <ul>
	             @foreach ($errors->all() as $error)
	                <li>{{$error}}</li>
	             @endforeach
	        </ul>
	    </div>

	@endif


<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
	            <strong>Nama</strong>
	            <input type="text" name="nama" value="{{$student->?Nama}}" class="from-control" placeholder="nama">
            </div>
        </div>


   	<div class="col-xs-12 col-sm-12 col-md-12">
	    <div class="form-group">
	        <strong>Kursus</strong>
	        <input type="text" name="Kursus" value="{{$student->Kursus}}" class="from-control" placeholder="Kursus">
	    </div>
	</div>


	<div class="col-xs-12 col-sm-12 col-md-12">
	    <div class="form-group">
	        <strong>biaya</strong>
	        <input type="text" name="biaya" value="{{$student->biaya}}" class="from-control" placeholder="biaya">
	    </div>
	</div>

	    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	        <button type="submit" class="btn btn-primary">submit</button>
	    </div>
    </div>

</form>

@endsection
