<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'MedievalSharp', sans-serif; 
            background-image: url('medieval_background.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        @font-face {
            font-family: 'MedievalSharp';
            src: url('MedievalSharp-Regular.ttf') format('truetype'); 
            font-weight: normal;
            font-style: normal;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.85); 
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            border: 2px solid #5e3f2d; 
        }

        h1 {
            color: #8a2e2e; 
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 1px 1px 2px #333;
        }

        .error-container {
            background-color: #fdecea;
            color: #a94442;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: left;
            border: 1px solid #a94442;
        }

        .success-container {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #155724;
        }

        input[type=email],
        input[type=password] {
            width: calc(100% - 30px);
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #a0855b; 
            border-radius: 6px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            font-size: 1em;
            color: #333;
        }

        button[type=submit] {
            background-color: #5e3f2d; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.2em;
            text-shadow: 1px 1px 1px #000;
            transition: background-color 0.3s ease;
        }

        button[type=submit]:hover {
            background-color: #77533a;
        }

        p {
            margin-top: 20px;
            font-size: 1em;
            color: #4a3b31;
            text-shadow: 0.5px 0.5px 1px #ccc;
        }

        a {
            color: #8a2e2e;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            padding-left: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        @if ($errors->any())
            <div class="error-container">
                <strong>Hark!</strong> There were some grave errors in thy entry.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="success-container">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="By thy quill, scribe thy email" required><br>
            <input type="password" name="password" placeholder="Guard well thy secret word" required><br>
            <button type="submit">Enter the Keep</button>
        </form>
        <p>Hath thou no account? <a href="/register">Seek ye to register hence</a>.</p>
    </div>
</body>
</html>