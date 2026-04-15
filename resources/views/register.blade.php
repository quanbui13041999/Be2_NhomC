<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        form {
            width: 350px;
            margin: 80px auto;
            padding: 25px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .actions a {
            text-decoration: none;
            color: #4CAF50;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        button {
            padding: 10px 15px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #45a049;
        }

        div[style="color:red"] {
            background: #ffe6e6;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <form method="POST" action="/register">
        @csrf

        @if($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" name="password">
        </div>
        <div class="form-group">
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="password_confirmation">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="actions">
            <a href="/login">Đã có tài khoản</a>
            <button type="submit">Đăng ký</button>
        </div>
    </form>
</body>

</html>