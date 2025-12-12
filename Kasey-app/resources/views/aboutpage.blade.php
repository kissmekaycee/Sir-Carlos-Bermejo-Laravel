<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SIR SARJ</title>
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
        .about-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .about-header h1 {
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 1rem;
        }
        .about-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .about-content h2 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }
        .about-content p {
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 1rem;
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
        <div class="about-header">
            <h1>About NOT MY FIRST WEBPAGE</h1>
        </div>

        <div class="about-content">
            <h2>Who We Are</h2>
            <p>Welcome to NOT MY FIRST WEBPAGE. We are dedicated to providing innovative solutions and exceptional service to our clients worldwide.</p>
            <p>Our mission is to deliver quality and excellence in everything we do, helping businesses achieve their goals through cutting-edge technology and expert guidance.</p>
        </div>

        <div class="about-content">
            <h2>Our Story</h2>
            <p>Founded with a vision to transform the industry, NOT MY FIRST WEBPAGE has grown into a trusted partner for countless organizations. We believe in continuous innovation and customer satisfaction.</p>
            <p>Our team of experienced professionals is committed to delivering solutions that exceed expectations and drive real business value.</p>
        </div>

        <div class="about-content">
            <h2>Our Values</h2>
            <p><strong>Innovation:</strong> We stay ahead of the curve with the latest technologies and methodologies.</p>
            <p><strong>Quality:</strong> We never compromise on the quality of our work.</p>
            <p><strong>Customer Focus:</strong> Your success is our success.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 SIR BERMEJO LARAVEL</p>
    </footer>
</body>
</html>