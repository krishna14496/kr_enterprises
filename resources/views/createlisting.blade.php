@extends('layouts.app')

@section('content')
	    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listings</div>

                <div class="card-body">
                    {!!Form::open(['action'=> 'ListingsController@store','method' => 'POST'])!!}
                    	{{Form::text('name', '', ['placeholder'=> 'Company Name']) }}
						{{Form::text('email', '', ['placeholder'=> 'Company email']) }}
						{{Form::text('phone', '', ['placeholder'=> 'Company phone']) }}
						{{Form::text('address', '', ['placeholder'=> 'Company address']) }}
                		{{Form::textarea('bio', '', ['placeholder'=> 'About this bussiness']) }}
                		{{Form::submit('submit') }}
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection 