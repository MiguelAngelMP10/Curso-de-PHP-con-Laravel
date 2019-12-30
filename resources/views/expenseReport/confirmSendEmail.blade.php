@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
        <h1>Send Reports {{$report->id}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}/sendEmail" method="POST">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" class="form-text text-muted">
                </div>
                <button type="submit" class="btn btn-primary">Send email</button>
            </form>
        </div>
    </div>
@endsection