
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="about.css">
    <style>
        .package-title{
    text-align: center;
}

.package-title h2{
    font-size: 40px;
    font-weight: 650;
    padding-top: 75px;
    padding-bottom: 10px;
    line-height: 2;
}

.package-content{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.image{
    position: relative;
    transition: all 0.3s cubic-bezier(0.445,0.05,0.55,0.95);
    cursor: pointer;
    filter: brightness(95%);
}

.image img{
    width: 100%;
    height: 500px;
    border-radius: 30px;
}

.image h3{
    color: white;
    position: absolute;
    font-size: 30px;
    font-weight: 600;
    text-align: center;
    top: 10px;
    right: 20px;
}

.dest-content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    margin-bottom: 50px;
}

.location h4{
    font-size: 25px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 2px;
}

.pac-details li{
    font-size: 19px;
    color: #4c4c4c;
    margin-left: 15px;
    margin-bottom: 2px;
    list-style-type: disc;
}

.image:hover{
    filter: brightness(120%);
    transform: scale(1.03);
}
    </style>
</head>

<body>
    
    <section class="package" id="package">
        <div class="package-title">
            <h2>Packages</h2>
        </div>
    
        <div class="package-content">
            
            <div class="box" href="login_form.php" target="_blank">
                <div class="image">
                    <img src="pack1.jpg" alt="" >
                    <h3>NORMALPACKAGE:-Rs.1000/month- + Rs.300 Cardio</h3>
                </div>
            
            <div class="dest-content">
                <div class="location">
                    <h4>Bronze</h4>
                    <ul class="pac-details">
                        <li>owership</li>
                        <li>30 days package</li>
                        <li>Free photo Session</li>
                        <li>Cardio-machinery available</li>
                        <li>Timing: 5AM-10AM AND 5PM-11pm</li>
                    </ul>
                </div>
            </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="pack2.jpg" alt="">
                    <h3>Silver Packages-:Rs.3000/3month + cardio free</h3>
                </div>
            
            <div class="dest-content">
                <div class="location">
                    <h4>Silver</h4>
                    <ul class="pac-details">
                        <li>Silver ownership</li>
                        <li>90days</li>
                        <li>Free photo Session</li>
                        <li>trainer faciality</li>
                        <li>Timing: 5AM-10AM AND 5PM-11pm</li>
                    </ul>
                </div>
            </div>
            </div>
    
            <div class="box" style="width: 50%;">
                <div class="image">
                    <img src="pack3.jpg" alt="">
                    <h3>Gold Packages-:Rs.5599/6month + cardio free</h3>
                </div>
            
            <div class="dest-content">
                <div class="location">
                    <h4>Gold</h4>
                    <ul class="pac-details">
                        <li>gold ownership</li>
                        <li>180 days</li>
                        <li>Free photo Session</li>
                        <li>Personal Guide</li>
                        <li>Timing: 5AM-10AM AND 5PM-11pm</li>
                    </ul>
                </div>
            </div>
            </div>
    
            <div class="box" style="width: 50%;">
                <div class="image">
                    <img src="pack4.jpg" alt="" >
                    <h3>Platinum Packages-:Rs.10000/12month + cardio free</h3>
                </div>
            
            <div class="dest-content">
                <div class="location">
                    <h4>Platinum</h4>
                    <ul class="pac-details">
                        <li>platinum ownership</li>
                        <li>365 days + 10 days free</li>
                        <li>Diet plan</li>
                        
                        <li>Free photo Session</li>
                        <li> Guide</li>
                        <li>Timing: 5AM-10AM AND 5PM-11pm</li>
                    </ul>
                </div>
            </div>
            </div>
         <button class="payment" wi></button>
        </div>
    
    </section>
    
    <!-- Newsletter -->
    
    <!-- <section class="newsletter">
        <div class="newstext">
            <h2>Newsletter</h2>
            <p>Subscribe to get offers and latest<br>updates every week!</p>
        </div>
    
        <div class="send">
            <form action="">
                <input type="email" name="emailid" placeholder="E-mail" required>
                <input type="submit" value="Subscribe">
            </form>
        </div>
    
    </section>
     -->
</body>
</html>
