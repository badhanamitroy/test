<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="header-top">
            <div class="exit" onclick="showBusinessAC()">
                <i class="fa-solid fa-square-xmark" id="exit"></i>
            </div>
            <div class="content"> 
                <i class="fa-solid fa-bag-shopping"></i> 
                <h1>Do you need a business account?</h1> 
                <button>Sign Up</button>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="left">
                    <img src="logo.png" class="logo" alt="">
                    <h1>ডাক্তারখানায় আপনাকে স্বাগতম</h1>
                </div>

                <div class="right">
                    <center>
                        <button>Sign in</button>
                    </center>
                </div>
            </div>
        </div>
    </header>
    
    <script>
        document.querySelector(".header-top").style.display = "block"; 
        function showBusinessAC(){
            document.querySelector(".header-top").style.display = "none";
        }       
    </script>
</body>
</html>