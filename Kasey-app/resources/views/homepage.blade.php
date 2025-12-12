<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SIR SARJ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        nav {
            background-color: #2c3e50;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #3498db;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5rem 2rem;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 3rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.3rem;
        }
        section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        section h2 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 2rem;
        }
        section p {
            line-height: 1.8;
            font-size: 1.1rem;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="hero">
            <h1>Welcome to NOT MY FIRST WEBPAGE</h1>
            <p>Your premier solution for innovation and excellence</p>
        </div>

        <section>
            <h2>Featured Content</h2>
            <p>Welcome to our homepage. We provide innovative solutions tailored to your needs. Explore our services and get in touch with us today!</p>
        </section>
    </div>

    <footer>
       <p>&copy; 2025 SIR BERMEJO LARAVEL</p>
    </footer>
</body>
</html>