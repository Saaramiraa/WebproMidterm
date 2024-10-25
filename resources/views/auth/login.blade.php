<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }
    
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      width: 100%;
      padding: 0 10px;
      background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
      position: relative;
    }
    
    body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: url("img/book.jpg"), #000;
      background-position: center;
      background-size: cover;
      z-index: -1;
    }
    
    .wrapper {
      width: 400px;
      border-radius: 15px;
      padding: 40px;
      text-align: center;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
      transition: all 0.3s ease;
    }
    
    .wrapper:hover {
      box-shadow: 0 12px 48px rgba(0, 0, 0, 0.5);
    }
    
    form {
      display: flex;
      flex-direction: column;
    }
    
    h2 {
      font-size: 2.2rem;
      margin-bottom: 25px;
      color: #ffffff;
      letter-spacing: 1px;
    }
    
    button {
      background-color: #271930;
      color: #ffffff;
      font-weight: 600;
      border: none;
      padding: 15px 20px;
      cursor: pointer;
      border-radius: 25px;
      font-size: 16px;
      border: 2px solid transparent;
      transition: all 0.3s ease;
    }
    
    button:hover {
      color: #000000;
      background: rgba(255, 255, 255, 0.2);
      border-color: #ffffff;
    }
    
    .input-field {
      position: relative;
      border-bottom: 2px solid rgba(255, 255, 255, 0.3);
      margin: 20px 0;
    }
    
    .input-field label {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      color: #ffffff;
      font-size: 16px;
      pointer-events: none;
      transition: 0.3s ease;
    }
    
    .input-field input {
      width: 100%;
      height: 40px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 16px;
      color: #ffffff;
      padding: 0 10px;
    }
    
    .input-field input:focus ~ label,
    .input-field input:valid ~ label {
      font-size: 0.9rem;
      top: 10px;
      transform: translateY(-150%);
      color: #ffddee;
    }
    
    .forget {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 25px 0 35px 0;
      color: #ffffff;
    }
    
    .wrapper a {
      color: #ffddee;
      text-decoration: none;
    }
    
    .register {
      text-align: center;
      margin-top: 30px;
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <h2>Login Form</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      
      <!-- Email Address -->
      <div class="input-field">
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <label for="email">Enter your email</label>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="input-field">
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        <label for="password">Enter your password</label>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me -->
      <div class="forget">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox" name="remember" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
          <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
        </label>
        <a href="{{ route('password.request') }}">Forgot password?</a>
      </div>

      <button type="submit" class="ms-3">Log In</button>
      
      <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
