<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Kasey</title>
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
            gap: 0.4rem;
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
        form {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 1.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            display: grid;
            gap: 1rem;
        }
        label {
            font-weight: 600;
            margin-bottom: 0.35rem;
            display: block;
            color: var(--text);
        }
        input,
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 1rem;
            font-family: inherit;
            background: #fdfdff;
            transition: border 0.15s ease, box-shadow 0.15s ease;
        }
        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }
        button {
            background: var(--accent);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 0.85rem 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        button:hover,
        button:focus {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.18);
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
            <h1>Contact us</h1>
            <p>Send a quick note and we will reply with next steps.</p>
        </div>

        <form method="POST" action="/contact">
            <div>
                <label for="name">Full name</label>
                <input id="name" name="name" type="text" placeholder="Alex Doe" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="you@example.com" required>
            </div>
            <div>
                <label for="subject">Subject</label>
                <input id="subject" name="subject" type="text" placeholder="What can we help with?" required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Share a few details…" required></textarea>
            </div>
            <button type="submit">Send message</button>
        </form>
    </main>

    <footer>
        <p>We usually reply within one business day · Kasey Studio</p>
    </footer>
</body>
</html>