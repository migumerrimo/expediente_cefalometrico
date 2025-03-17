<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión - MediMark</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    body {
      background-color:rgb(98, 200, 248);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      width: 100%;
      max-width: 900px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .header {
      background-color: #00AEEF;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .header a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .form-container {
      padding: 40px;
      position: relative;
    }

    .logo {
      max-width: 200px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #008000;
      border: none;
    }

    .btn-primary:hover {
      background-color: #006400;
    }
    .btn-secondary {
      background-color: #008000;
      border: none;
    }

    .btn-secondary:hover {
      background-color: #006400;
    }

    .register-link {
      margin-top: 15px;
    }

    .background-text {
      position: absolute;
      bottom: 20px;
      right: 40px;
      opacity: 0.1;
      font-size: 100px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="header">
    <img src="{{ asset('img/medimark_logo.png') }}" alt="MediMark" class="logo">
    
  </div>

  <div class="form-container">
    <h2>Inicia sesión</h2>
    <p>Inicia sesión con tu cuenta de MediMark para empezar a usar el servicio</p>

    <form action="{{ route('auth.authenticate') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo" value="{{ old('email') }}" required>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="w-100 btn btn-lg btn-primary">Inicia Sesión</button>

      <a href="{{ route('register') }}" class="w-100 btn btn-lg btn-secondary mt-2">Registro</a>
    </form>

    <div class="background-text">MEDIMARK</div>
  </div>
</div>

</body>
</html>