@extends('auth.layouts.master')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">

            <div class="card">

                <div class="card-header">
                    Redefinir senha
                </div>

                <div class="card-body">

                    @if ( session('status') )

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <form method="POST" action="{{ route('password.email') }}">

                        @csrf

                        <div class="form-group row">
                            
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                E-mail
                            </label>

                            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror

                            </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                        </div> <!-- form-group row -->

                        <div class="form-group row mb-0">

                            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-outline-primary">
                                    Enviar
                                </button>

                                <a class="btn btn-outline-link" href="{{ route('login') }}">
                                    Área restrita?
                                </a>

                            </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 offset-md-4 -->

                        </div> <!-- form-group row mb-0 -->

                    </form> <!-- form -->

                </div> <!-- card-body -->

            </div> <!-- card -->

        </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 -->

    </div> <!-- row justify-content-center -->

</div> <!-- container -->

@endsection
