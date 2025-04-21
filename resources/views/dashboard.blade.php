<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'MedievalSharp', sans-serif; /* Use a medieval-style font */
            background-image: url('medieval_background.jpg'); /* Replace with your medieval background image */
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
            src: url('MedievalSharp-Regular.ttf') format('truetype'); /* Replace with the path to your font file */
            font-weight: normal;
            font-style: normal;
        }

        .container {
            background-color: rgba(245, 245, 220, 0.9); /* Light parchment color, semi-transparent */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            width: 500px;
            text-align: center;
            border: 3px solid #8B4513; /* Saddle brown border */
        }

        h1 {
            color: #A0522D; /* Sienna title color */
            margin-bottom: 30px;
            font-size: 3em;
            text-shadow: 2px 2px 3px #333;
        }

        p {
            color: #556B2F; /* Dark olive green text color */
            margin-bottom: 25px;
            font-size: 1.2em;
            text-shadow: 1px 1px 1px #ddd;
        }

        button[type=submit] {
            background-color: #8B4513; /* Saddle brown button color */
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.5em;
            text-shadow: 1px 1px 1px #000;
            transition: background-color 0.3s ease;
        }

        button[type=submit]:hover {
            background-color: #A0522D;
        }

        .greeting {
            font-style: italic;
            font-size: 1.8em;
            color: #708090; /* Slate gray for the greeting */
            margin-bottom: 20px;
            text-shadow: 1px 1px 1px #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="greeting">Hark, noble {{ auth()->user()->name }}!</h1>
        <p>Thou art logged in under the guise of {{ auth()->user()->email }}</p>

        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Depart the Realm</button>
        </form>
    </div>
</body>
</html>