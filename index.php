<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto Refresh and Change Background Color</title>
    <script>
        // Set a timer to reload the page every 10 seconds
        setTimeout(function() {
            location.reload();
        }, 10000); // 10000 milliseconds = 10 seconds

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Set the initial background color and update it on reload
        window.onload = function() {
            document.body.style.backgroundColor = getRandomColor();
        };
    </script>
</head>
<body>
    <?php
