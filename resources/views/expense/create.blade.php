@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>new expense</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <a class="btn btn-secondary" href="/expense_reports/{{$report->id}}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if ($errors->any())
           <div class="alert alert-danger" role="alert">
               @foreach ($errors->all() as $error)
                    <li>{{$error}}</li> 
               @endforeach
           </div>
                
            @endif

        <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
                @csrf
                <div class="form-group">
                  <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Type a description" value="{{old('description')}}">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                  <input type="text" name="amount" id="amount" class="form-control" placeholder="Type a amount" value="{{old('amount')}}">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection