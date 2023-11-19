<!DOCTYPE html>
<html>
<head>
    <title>Download File</title>
    <style>
.container {
    text-align: center;
    margin-top: 200px;
}

h1 {
    font-size: 24px;
}

form {
    margin-top: 20px;
}

input {
    padding: 10px;
    width: 300px;
}

button {
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px;
    font-size: 16px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Download File</h1>
        <form action="download.php" method="post">
            <input type="text" name="download_speed" placeholder="Download Speed (in bytes per second)">
            <button type="submit">Download Now</button>
        </form>
    </div>
</body>
</html>