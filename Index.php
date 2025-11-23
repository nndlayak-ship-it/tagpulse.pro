<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashtag Generator</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2 class="title">Find Most Popular <span>#Tags</span></h2>

    <div class="input-box">
        <input type="text" id="keyword" placeholder="Search hashtag...">
        <button onclick="generateTags()">Generate</button>
    </div>

    <div class="loading" id="loading">
        <div class="loader"></div>
        <p>Generating...</p>
    </div>

    <div class="result" id="result"></div>
</div>

<script src="assets/script.js"></script>
</body>
</html>