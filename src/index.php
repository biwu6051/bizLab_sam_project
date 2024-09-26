<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Navigation</title>
    <style>
        /* Basic styling */
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { text-align: center; }
        button { padding: 15px 30px; font-size: 18px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Economic Experiment</h1>
        <p>Click the button below to start the simulation.</p>
        <button onclick="window.location.href='/src/parallelQueue.php'">Start Simulation</button>
    </div>
</body>
</html>
