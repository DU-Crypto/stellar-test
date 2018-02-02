@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accounts</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Address</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                         @foreach ($accounts as $account)
                             <tr>
                              <td>{{ $account->address }}</td>
                              <td>{{ $account->balance }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <ul>
                       
                    </ul>

                </div>
            </div>
        </div>
          <div>
            <add-account-component></add-account-component>
            <withdraw-component></withdraw-component>
          </div>
    </div>

</div>


@endsection
