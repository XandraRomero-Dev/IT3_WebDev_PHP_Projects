<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding Profile - Junior Dev</title>
    <style>
        /* Phase 2: Styling the Professional ID Card */
        body {
            display: flex; /* Centers card perfectly */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f3f0; /* Light background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: rgba(255, 154, 23, 0.1); /* White card background */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1); /* Box-shadow for pop */
            text-align: center;
            width: 400px;
        }

        h1 { margin-bottom: 5px; font-size: 24px; }
        .bio { font-style: italic; color: #555; margin-bottom: 20px; }
        
        ul { 
            text-align: left; 
            display: inline-block; 
            margin-bottom: 25px;
        }

        /* The stylized button from your request */
        #initBtn {
            background-color: #ff6601; 
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        #initBtn:hover { background-color: #fa9d33; }

        /* Step 4: System Info Styling */
        .system-info {
            margin-top: 30px;
            padding-top: 20px;
            border-left: 4px solid #ffcc5d;
            background: #ffd78e;
            text-align: left;
            padding-left: 15px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Junior Software Engineer</h1>
        <p><strong>Name:</strong> Xandra Romero</p>
        <p class="bio">"Ready to learn PHP and MySQL this semester!"</p>

        <h3>Current Tech Stack:</h3>
        <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript (Basics)</li>
            <li>XAMPP Environment</li>
        </ul>

        <br>
        <button id="initBtn">Initialize System</button>

        <div class="system-info">
            <h3>Server Information</h3>
            <p><strong>Server Status:</strong> Online</p>
            <p><strong>Server Date:</strong> <?php echo date('l, F j, Y'); ?></p>
            <p><strong>Server Time:</strong> <?php echo date('g:i A'); ?></p>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        </div>
    </div>

    <script>
        // Step 3: Event Listener for the button
        document.getElementById('initBtn').addEventListener('click', function() {
            alert('Welcome to the team! System Initialized.');
        });
    </script>

</body>
</html>

