@extends('layouts/head')
@section('content')
	<div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              
              <td>No</td>
              <td>Header</td>
              <td>Bodytd>
              <td>Footer</td>

            </tr>
          </thead>
          <tbody>
          	<?php
          	$no=1;
          	?>
            @foreach($lihattemplate as $value)
            <tr>
           	  <td>{{ $no }}</td>
              <td>{{ $value->kepala}}</td>
              <td>{{ $value->isi}}</td>
              <td>{{ $value->kaki}}</td>

              <td>
                {!! Form::model($value, ['route' => ['hapuslisttemplate', $value], 'method' => 'delete', 'class' => 'form-inline'] ) !!}

                 <a href="{{ url('listtemplate/'.$value->id)}}">Edit</a> |
              {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm','onclick'=>'return konfirmasi()']) !!} | <a href="{{ url('/')}}">Home</a>
                {!! Form::close()!!}

              </td>
            </tr>
            <?php 
            $no++; 
            ?>
            @endforeach
          </tbody>
        </table>
        {{$lihattemplate->links()}}
      </div>
    </div>
  	</div>

@endsection