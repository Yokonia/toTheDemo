@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($user, ['method' => 'PATCH','route' => ['employees.update', $user->id]]) !!}
        <div class="form-group row">
                <label class="col-xl-2 col-form-label">Name</label>
                <div class="col-xl-10">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Address</label>
                <div class="col-xl-10">
                {!! Form::text('address', null, array('placeholder' => 'Physical Address','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Email</label>
                <div class="col-xl-10">
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Phone Number</label>
                <div class="col-xl-10">
                {!! Form::text('phone', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Sex</label>
                <div class="col-xl-10">
                <select name="sex" class="custom-select custom-select-sm">
                    <option value="{{$user->sex}}">{{$user->sex}}</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">NRC/Passport/ID</label>
                <div class="col-xl-10">
                {!! Form::text('nrc', null, array('placeholder' => 'Enter ID Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Salary Scale</label>
                <div class="col-xl-10">
                {!! Form::text('salary_scale', null, array('placeholder' => 'Salary Scale','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Maximum Advance (%)</label>
                <div class="col-xl-10">
                {!! Form::number('max_advance', null, array('placeholder' => 'Enter Maximum Advance','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Pay Day</label>
                <div class="col-xl-10">
                {!! Form::date('pay_day', null, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Company</label>
                <div class="col-xl-10">
                    <select name="sex" class="custom-select custom-select-sm">
                        <option value="{{$user->company_id}}">{{$user->company_id}}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Employee Number</label>
                <div class="col-xl-10">
                {!! Form::text('employee_number', null, array('placeholder' => 'Employee Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Contract Type</label>
                <div class="col-xl-10">
                <select name="sex" class="custom-select custom-select-sm">
                    <option value="{{$user->contract_type}}">{{$user->contract_type}}</option>
                    <option value="FT">Full Time</option>
                    <option value="PT">Part Time</option>
                    <option value="CW">Casual Worker</option>
                </select>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {!! Form::close() !!}
@endsection