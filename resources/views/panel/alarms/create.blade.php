@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creat Alarm') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('panel.alarms.store') }}">
                            @csrf

                            <div class="form-group row">

                                @component('panel.components.dselect',[
    'title' =>  __('Time'),
    'name' => 'time_id',
    'options' => $times,
    ])
                                @endcomponent

                                    @component('panel.components.select',[
        'title' =>  __('Alarm Type'),
        'name' => 'alarm_type',
        'options' => [
            'sms' => __('SMS'),
            'email' => __('E-Mail'),
    ],
        ])
                                    @endcomponent

                                <label class="col-md-4 col-form-label text-md-right">{{ __('Alarm Time') }}</label>

                                <div class="col-md-6">
                                    <input type="time" class="form-control @error('alarm_time') is-invalid @enderror"
                                           name="alarm_time" value="{{ old('email') }}" required
                                           autocomplete="alarm_time">

                                    @include('panel.includes.error',['name' => 'alarm_time'])
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Alarm') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
