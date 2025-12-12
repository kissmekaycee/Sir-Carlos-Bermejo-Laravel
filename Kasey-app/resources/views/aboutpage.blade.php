<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Kasey</title>
    <style>
        :root {
            --bg: #f7f7fa;
            --card: #ffffff;
            --text: #1f2933;
            --muted: #4b5563;
            --accent: #2563eb;
            --border: #e5e7eb;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        main {
            max-width: 960px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem 3rem;
            display: grid;
            gap: 1.5rem;
        }
        .page-title {
            display: grid;
            gap: 0.5rem;
            text-align: center;
        }
        .page-title::after {
            content: "";
            width: 90px;
            height: 4px;
            margin: 0.35rem auto 0;
            display: block;
            border-radius: 999px;
            background: linear-gradient(90deg, #2563eb, #7c3aed);
        }
        .page-title h1 {
            font-size: 1.9rem;
            letter-spacing: -0.02em;
        }
        .page-title p {
            color: var(--muted);
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 1.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .card h2 {
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }
        .card p {
            color: var(--muted);
        }
        ul {
            list-style: disc;
            padding-left: 1.2rem;
            color: var(--muted);
            display: grid;
            gap: 0.35rem;
        }
        footer {
            text-align: center;
            padding: 2rem 1.5rem 3rem;
            color: var(--muted);
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <main>
        <div class="page-title">
            <h1>About this space</h1>
            <p>We keep things uncomplicated so you can focus on your ideas.</p>
        </div>

        <section class="card">
            <h2>Who we are</h2>
            <p>Kasey Studio is a small team that enjoys crafting calm, readable pages. We believe clarity beats clutter every time.</p>
        </section>

        <section class="card">
            <h2>How we work</h2>
            <p>We start with your goal, trim away the noise, and deliver only what is needed. Each project is treated like a friendly collaboration.</p>
        </section>

        <section class="card">
            <h2>What matters to us</h2>
            <ul>
                <li>Simplicity that still feels thoughtful.</li>
                <li>Copy that speaks plainly.</li>
                <li>Design that works on any screen.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>Thanks for visiting · Kasey Studio</p>
    </footer>
</body>
</html>