@extends('layouts/headtempl')

          <button id="btn2">Preview Form</button>
          <button id="btn3">Edit Form</button>
@section('content')
	<div class="container">
      	<div class="row clearfix">
      	{!! $idlisttemplate->isi !!}
		<br/>

		{!! Form::open(array('route' => ['updateformtempl',$idlisttemplate], 'class' => 'form-signin')) !!}
		    {!! Form::hidden('id', $idlisttemplate->id) !!}
		    

		<div class="form-group">
		    {!! Form::label('Script HTML') !!}
		    {{ Form::textarea('isi', $idlisttemplate->isi, ['id' => 'ubah']) }}
		</div>
		<div class="form-group">
		    {!! Form::submit('Update', 
		      array('class'=>'btn btn-primary')) !!}

		      <a class="btn btn-primary" href="{{ route('lihattemplate') }}">Cancel</a>
		</div>
		{!! Form::close() !!}

		</div>
	</div>
</br>
<div class="container">

	          <!-- ini untuk meletakan preview calon formbuilder -->
          <p id="buat"></p>
          <!-- ini batas untuk meletakan preview calon formbuilder -->

</div>
@endsection
