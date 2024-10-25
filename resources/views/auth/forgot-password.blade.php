<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            transition: all 0.3s ease;
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Email Address -->
            <div class="input-field">
                <input type="email" name="email" required autofocus />
                <label for="email">Email</label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <button type="submit">Email Password Reset Link</button>
            </div>
        </form>
    </div>
</body>
</html>

