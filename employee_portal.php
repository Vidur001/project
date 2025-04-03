<?php
// employee_portal.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal - The Vows and Wows</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .time-card {
            text-align: center;
            margin: 30px 0;
        }
        .time-card h2 {
            color: #333;
        }
        .time-display {
            font-size: 24px;
            margin: 20px 0;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-clockin { background-color: #27ae60; }
        .btn-break { background-color: #f39c12; }
        .btn-clockout { background-color: #e74c3c; }
        .logout-btn {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Employee Portal</h1>
        <p>The Vows and Wows - Event Management System</p>
    </div>
    
    <div class="container">
        <div class="time-card">
            <h2>Time Management</h2>
            <div class="time-display" id="current-time"></div>
            
            <div class="action-buttons">
                <button class="btn btn-clockin" id="clockin-btn">Clock In</button>
                <button class="btn btn-break" id="break-btn" disabled>Start Break</button>
                <button class="btn btn-clockout" id="clockout-btn" disabled>Clock Out</button>
            </div>
        </div>
        
        <a href="index.php" class="logout-btn">← Return to Main Site</a>
    </div>

    <script>
        // Update current time
        function updateTime() {
            const now = new Date();
            const timeElement = document.getElementById('current-time');
            const timeString = now.toLocaleTimeString();
            timeElement.textContent = `Current Time: ${timeString}`;
        }
        
        setInterval(updateTime, 1000);
        updateTime();
        
        // Button functionality
        const clockinBtn = document.getElementById('clockin-btn');
        const breakBtn = document.getElementById('break-btn');
        const clockoutBtn = document.getElementById('clockout-btn');
        
        clockinBtn.addEventListener('click', function() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            alert(`Clocked in at ${timeString}`);
            clockinBtn.disabled = true;
            breakBtn.disabled = false;
        });
        
        breakBtn.addEventListener('click', function() {
            if (breakBtn.textContent === 'Start Break') {
                const now = new Date();
                const timeString = now.toLocaleTimeString();
                alert(`Break started at ${timeString}`);
                breakBtn.textContent = 'End Break';
                clockoutBtn.disabled = true;
            } else {
                const now = new Date();
                const timeString = now.toLocaleTimeString();
                alert(`Break ended at ${timeString}`);
                breakBtn.textContent = 'Start Break';
                clockoutBtn.disabled = false;
            }
        });
        
        clockoutBtn.addEventListener('click', function() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            alert(`Clocked out at ${timeString}`);
            clockoutBtn.disabled = true;
            breakBtn.disabled = true;
        });
    </script>
</body>
</html>