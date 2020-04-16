<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inforiojapolitica</title>

    <!-- Stylesheet -->
    @include('stylesheet')

</head>
<body background="img/Login1.jpg">

    <div class="container-fluid">
        <div class="row nav nav-navbar expand-md">
            <div class="col-auto logo">
                <img src="">
            </div>
        </div>
    </div>

    <main role="main" class="container-fluid">

        <div class="log row">
            <img style="width: 150px; height: 150px;"
            src="img/User4.png">
        </div>

        <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-12">

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                    
                <div class="form-group">
                    <label for="username"><i class="icon-mail"></i> UserName</label>
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <label for="password"><i class="icon-key"></i> Contraseña</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                

                <div class="btn-log">
                    <button type="submit" class="btn btn-dark" style="width: 100%;">
                        {{ __('Ingresar') }}
                    </button>
                </div>

            </form>
        </div>    
    </main>
</body>
</html>
