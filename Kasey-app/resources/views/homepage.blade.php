<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Kasey</title>
    <style>
        :root {
            color-scheme: light;
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
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .page-title {
            display: grid;
            gap: 0.4rem;
            text-align: center;
        }
        .page-title h1 {
            font-size: 1.9rem;
            letter-spacing: -0.02em;
        }
        .page-title p {
            color: var(--muted);
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
        .hero {
            background: linear-gradient(135deg, #e0ecff 0%, #ffe4f3 100%);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 2rem;
            display: grid;
            gap: 0.75rem;
        }
        .hero h1 {
            font-size: 2rem;
            letter-spacing: -0.02em;
        }
        .hero p {
            color: var(--muted);
            max-width: 640px;
        }
        .cta {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        .button {
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 0.7rem 1.1rem;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .button:hover,
        .button:focus {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.18);
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
            <h1>Home</h1>
            <p>Hello and welcome to my website.</p>
        </div>

        <section class="hero">
            <h1>Kasey Laravel</h1>
            <p>Built with Laravel, designed to be simple. Whether you're prototyping something new or putting together a small project, this is a straightforward place to start.</p>
            <div class="cta">
                <a class="button" href="/about">Learn more</a>
                <a class="button" style="background:#111827" href="/contact">Get in touch</a>
            </div>
        </section>

        <section class="card">
            <h2>What we do</h2>
            <p>We create simple sites and landing pages that focus on clear messaging, friendly design, and practical details. If you need an uncomplicated home for your idea, you are in the right place.</p>
        </section>

        <section class="card">
            <h2>Why this style</h2>
            <p>This layout keeps everything calm and readable: generous spacing, gentle colors, and only a handful of elements. It is easy to skim, easy to extend, and ready to make your own.</p>
        </section>
    </main>

    <footer>
        <p>Made with care · Kasey Studio</p>
    </footer>
</body>
</html>