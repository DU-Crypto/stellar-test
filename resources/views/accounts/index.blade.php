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
                          <th>  </th>
                          <th>Address</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                         @foreach ($accounts as $account)
                             <tr>
                              <td><deposit-component></deposit-component>
                              <withdraw-component></withdraw-component></td>
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
          <div class="col-md-8 col-md-offset-2">
            <add-account-component></add-account-component>

          </div>
    </div>

</div>


@endsection
