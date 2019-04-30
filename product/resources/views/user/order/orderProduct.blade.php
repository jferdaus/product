@extends('user.master')

@section('page-head')

Product Order Entry

@endsection


@section('mainContent')

 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">

 {{ Session::get('msg')}}

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

    
                    {{ Form::open(array('url' => '/save', 'method' => 'post')) }}

                                 


                                

                                        <div class="form-group">
                                            <label>Product Code</label>
                                            <input name="code" class="form-control">
                                           
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input name="name" class="form-control">
                                           
                                        </div>


                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input name="quantity" class="form-control">
                                           
                                        </div>







											<div class="form-group">
                                           
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                           
                                        </div>
                                        
{!! Form::close() !!}

                                
                                </div>





                            </div>
                        </div>
@endsection