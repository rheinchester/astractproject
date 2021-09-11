@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in as a user!') }} --}}
                    <div class="panel">
                        <h1>Hello {{Auth::user()->name}}!</h1>
                    </div>
                    {{-- @component('components.who')
                        
                    @endcomponent --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{Auth::user()->id == $gallery->user->id)}} --}}
@endsection