<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro · MediMark</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      body {
        background-color:rgb(111, 158, 247);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }

      .form-register {
        width: 80%;
        max-width: 900px;
        background-color:rgb(79, 198, 249);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .form-register h1 {
        color: #000000;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .btn-submit {
        background-color: #008000;
        color: white;
      }

      .btn-submit:hover {
        background-color: #006400;
      }

      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .link-login {
        text-decoration: none;
        color: #000000;
      }

      .link-login:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>

<main class="form-register">
  <div class="header">
    <img src="{{ asset('img/bootstrap-logo.svg') }}" alt="MediMark Logo" width="120">
  </div>

  <h1 class="h3 mb-3 fw-normal">Crea tu cuenta</h1>
  <p>Regístrate en MediMark y comienza a cambiarle la vida a los pacientes.</p>

  <form action="{{ route('auth.register') }}" method="POST">
      @csrf

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre" required>
          @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-6 form-group">
          <label for="email">Correo</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Correo" required>
          @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-6 form-group">
          <label for="password">Crea tu contraseña</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required>
          @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-6 form-group">
          <label for="confirm-password">Confirma tu contraseña</label>
          <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" id="confirm-password" name="confirm-password" placeholder="Confirmar contraseña" required>
          @error('confirm-password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
      </div>

      <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" id="terms" required>
        <label class="form-check-label" for="terms">
          Acepto que he leído los Términos y Condiciones de uso de MediMark
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-submit mt-4" type="submit">Crea tu cuenta</button>
  </form>
</main>

  </body>
</html>
