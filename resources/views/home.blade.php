@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Wallets</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--lumens page in the future  -->
                     <a class="btn btn-success" href="{{ url('/accounts') }}">
                                   XLM
                                </a>
                         <!--neo page in the future  -->
                         <a class="btn btn-success" href="{{ url('/accounts') }}">
                                   NEO
                                </a>
                   
                  
                </div>
               
                
            </div>
        </div>
    </div>
</div>
@endsection
