<!DOCTYPE html>
<html>
<head>
    <title>Valentine Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: pink;
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .yes-button, .no-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .yes-button {
            background-color: red;
            color: white;
            transition: transform 0.3s;
        }
        .no-button {
            background-color: white;
            color: black;
            position: absolute;
        }
        .small-heart {
            position: absolute;
            color: red;
            font-size: 20px;
            animation: floatUp 2s linear forwards;
        }
        .big-heart {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            color: red;
            opacity: 0;
            animation: pulse 1s ease-in-out infinite;
        }
        @keyframes floatUp {
            0% { transform: translateY(0) scale(1); opacity: 1; }
            100% { transform: translateY(-100px) scale(0.5); opacity: 0; }
        }
        @keyframes pulse {
            0% { transform: translate(-50%, -50%) scale(1); opacity: 0.7; }
            50% { transform: translate(-50%, -50%) scale(1.2); opacity: 1; }
            100% { transform: translate(-50%, -50%) scale(1); opacity: 0.7; }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="big-heart">❤️</div>
    <h1>Hai, {{ $name }}! Mau jadi Valentine-ku?</h1>
    <div class="button-container">
        <button class="yes-button">Yes</button>
        <button class="no-button">No</button>
    </div>
    <script>
        $(document).ready(function() {
            let noButton = $('.no-button');
            let maxWidth = $(window).width() - 100;
            let maxHeight = $(window).height() - 50;
            
            $('.no-button').hover(function() {
                let newX = Math.random() * maxWidth;
                let newY = Math.random() * maxHeight;
                $(this).css({ top: newY + 'px', left: newX + 'px' });
            });
            
            $('.yes-button').click(function() {
                for (let i = 0; i < 10; i++) {
                    let heart = $('<div class="small-heart">❤️</div>');
                    $('body').append(heart);
                    let x = Math.random() * $(window).width();
                    let y = Math.random() * $(window).height();
                    heart.css({ left: x + 'px', top: y + 'px' });
                    setTimeout(() => heart.remove(), 2000);
                }
            });
        });
    </script>
</body>
</html>
