@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                

                <div class="card-body">
                    @foreach ($users as $user)

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6 text-md-left">
                                {{ $user->name }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6 text-md-left" >
                                {{ $user->email }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6 text-md-left">
                                {{ $user->address }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Zip code') }}</label>

                            <div class="col-md-6 text-md-left">
                                {{ $user->zip_code }}
                            </div>
                        </div>
                   
                    @endforeach

                 

                    

                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
