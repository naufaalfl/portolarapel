<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofoliski</title>
    <link rel="stylesheet" href="szn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
   <style>
    * {
    margin : 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "poppins", sans-serif;
}

:root {
    --bg-color:rgb(15, 15, 15);
    --sec-color:#161616;
    --text-color: White;
    --main-color:rgb(15, 102, 153);
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body {
    background: var(--bg-color);
    color: var(--text-color)
}

.header {
    position: fixed;
    top: 0;
    left:0;
    width: 100%;
    padding: 3rem 9%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.logo {
    font-size: 3rem;
    color: var(--text-color);
    font-weight: 800;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.logo :hover {
    transition: scale(1.1);
}

.navbar a{
    font-size: 1.8rem;
    color: white;
    margin-left: 4rem;
    font-weight: 500;
    transition: 0.3s ease-in-out;
    border-bottom: 3px solid transparent;
}

.navbar a:hover,
.navbar a:active{
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
}

#menu-icon {
    font-size: 3rem;
    color: var(--main-color);
    display: none;
}

section {
    min-height: 100vh;
    padding: 10rem 9% 10rem;
}

.home{
    display:flex;
    justify-content: center;
    align-items: center;
    gap: 8rem;
}

span{
    color: var(--main-color);
}

.logo span{
    color: var(--main-color);
}

.home-content h1{
    font-size: 8rem;
    font-weight: 900;
    line-height: 7rem;
}

.home-img{
    border-radius: 50%;
}

.home-img img{
    position: relative;
    border-radius: 50%;
    width: 32vw;
    box-shadow: 0 0 25px var(--main-color);
    cursor: pointer;
    transition: 0.4s ease-in-out;
}

.home-img img:hover{
    box-shadow: 0 0 50px var(--main-color),
                0 0 100px var(--main-color);
}

.home-content p{
    font-size: 1.8rem;
    font-weight: 500;
}

.social-icons a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background: transparent;
    border: 0.2rem solid var(--main-color);
    color: var(--main-color);
    margin: 3rem 1.5rem 3rem 0;
    transition: 0.3s ease-in-out;
    border-radius: 50%;
}

.social-icons a:hover{
    color: white;
    transform: scale(1.3)translateY(-5px);
    background-color: var(--main-color);
    box-shadow: 0 0 25px var(--main-color);
}

.btn{
    display: inline-block;
    padding: 1rem 2.8rem;
    background: var(--bg-color);
    border-radius: 4rem;
    font-size: 1.6rem;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    letter-spacing: 0.1rem;
    font-weight: 600;
    transition: 0.3s ease-in-out;
    cursor: pointer;
}

.btn:hover{
    transform: scale(1.05);
    background: var(--main-color);
    color: var(--text-color);
    border: 2px solid var(--main-color);
    box-shadow: 0 0 25px var(--main-color);
}

.text-animation{
    font-size: 42px;
    font-weight: 600;
    min-width: 280px;
    margin: 10px 0;
}

.text-animation span{
    position: relative;
}

.text-animation span:before{
    content:'web developer';
    color: var(--main-color);
    animation: words 20s infinite;
}

.text-animation span::after{
    content: "";
    background-color:;
    position: absolute;
    width: calc(100% + 8px);
    height: 100%;
    border-left: 3px solid var(--bg-color);
    right: -8px;
    animation: cursor 0.6s infinite, typing 20s steps (14) infinite;
}

@keyframes cursor {
    to{
        border-left: 2px solid var(--main-color);
    }
}
@keyframes words {
    0%,
    20%{
        content: 'Web Developer';
    }
    21%,
    40%{
        content : "Graphic Designer";
    }
    41%,
    60%{
        content: "UI / UX Designer";
    }
    61%,
    80%{
        content: "Athelete";
    }
    81%,
    100%{
        content: "U're BoyFriends"
    }
}
@keyframes typing{
    10%,
    15%,
    30%,
    35%,
    50%,
    55%,
    70%,
    75%,
    90%,
    95% {
        width: 0;
    }
    5%,
    20%,
    25%,
    40%,
    45%,
    60%,
    64%,
    80%,
    85% {
        width : calc(100% + 8px);
    }
}

.heading{
    text-align: center;
    font-size: 8rem;
}

.service{
    background-color: var(--sec-color);
}

.service h2{
    margin-bottom: 8rem;
}

.service-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 3rem;
}

.service-container .service-box{
    flex: 1 1 40rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: var(--bg-color);
    padding: 3rem 2rem 4rem;
    height: 550px;
    border-radius: 2rem;
    border: 3px solid var(--main-color);
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.service-container .service-box:hover{
    transform: scale(1.02);
    background-color: white;
    color: black;
}

.service-box i{
    font-size: 7rem;
    color: var(--main-color);
    margin-bottom: 1rem;
}

.service-box h3{
    font-size: 2.6rem;
}

.service-box p{
    font-size: 1.6rem;
    margin: 1rem 0 3rem;
    font-weight: 500;
}

.service-box .btn{
    background-color: transparent;
}

.service-box .btn:hover{
    color: var(--main-color);
    background-color: black;
}

::-webkit-scrollbar{
    width:15px;
}

::-webkit-scrollbar-thumb{
    background-color: var(--main-color);
}

::-webkit-scrollbar-track{
    background-color: var(--bg-color);
    width:50px
}
.projects{
    background-color: var(--bg-color);
}

.projects h2{
    margin-bottom: 8rem;
    gap: 5rem;
}

.projects-container{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    align-items: center;
    gap: 2.5rem;
}

.projects-container .projects-box{
    position: relative;
    height: 550px;
    overflow: hidden;
    display:flex;
    border-radius: 2rem;
    border: 3px solid transparent;
    transition: 0.5s ease-in-out;
}

.projects-box:hover{
    border: 3px solid var(--main-color);
}

.projects-box img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s ease-in-out;
}

.projects-box:hover img{
    transform: scale(1.05);
}

.projects-box .projects-info{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    gap: 1rem;
    padding: 0 4rem;
    cursor: pointer;
    transition: 0.5s ease-in-out;
    backdrop-filter: grayscale(100%);
} 

.projects-box .projects-info:hover{
    background: black;
    backdrop-filter: grayscale(0%);
}

.projects-info p{
    font-size: 1.6rem;
    margin: 0.3rem 0 1rem;
    color: var(--main-color);
}

.timeline-section{
    background: var(--sec-color);
    padding: 100px 15px;
}

.timeline-section h2{
    margin-bottom: 2rem;
}

.timeline-items{
    max-width: 1000px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    position: relative;
   
}

.timeline-items::before{
    content: '';
    position: absolute;
    width: 5px;
    height: 100%;
    background-color: var(--main-color);
    left:calc(50% - 1px);
 
}

.timeline-item{
    margin-bottom: 40px;
    width: 100%;
    position: relative;
 
}

.timeline-item:last-child{
    margin-bottom: 0;
}

.timeline-item:nth-child(odd){
    padding-right: calc(50% + 30px);
    text-align: right;
}

.timeline-item:nth-child(even){
    padding-left: calc(50% + 30px);
}

.timeline-dot{
    height: 21px;
    width: 21px;
    background-color: var(--main-color);
    box-shadow: 0 0 25px var(--main-color);
    position: absolute;
    left: calc(50% - 8px);
    border-radius: 50% ;
    top:10px;
}

.timeline-date{
    font-size: 20px;
    font-weight: 800;
    color: white;
    margin: 6px 0 15px;
}

.timeline-content{
    background-color: var(--bg-color);
    backdrop-filter: blur(20px);
    border: 2px solid var(--main-color);
    padding: 30px;
    border-radius: 1rem;
    cursor: pointer;
    transition: 0.4s ease-in-out;
}

.timeline-content:hover{
    transform: scale(1.05rem);
    box-shadow: 0 0 25px var(--main-color);

}

.timeline-content h3{
    font-size: 20px;
    color: var(--main-color);
    margin: 0 0 10px;
    text-transform: capitalize;
    font-weight: 800;
    text-align: center;
}

.timeline-content p{
    color: white;
    opacity: 0.8;
    font-size: 16px;
    font-weight: 600;
    line-height: 22px;
    text-align: center;
}

.contact{
    background-color: var(--bg-colorik);
}

.contact h2{
    margin-bottom: 3rem;
}

.contact form{
    max-width: 70rem;
    margin: 1rem auto;
    text-align: center;
    margin-bottom: 3rem;
}
.contact form .input-box{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.contact form .input-box input, 
.contact form textarea{
    width: 100%;
    padding: 1.5rem;
    font-size: 1.6rem;
    color: var(--text-color);
    background: var(--bg-color);
    border-radius: 0.8rem;
    border: 2px solid var(--main-color);
    margin: 1rem 0;
    resize:none;
}

.contact form .btn{
    margin-top: 2rem;
}

.footer{
    position: relative;
    bottom: 0;
    width: 100%;
    padding: 40px 0;
    background-color: var(--sec-color);
}

.footer .social{
    text-align: center;
    padding-bottom: 25px;
    color:white;
}

.footer .social a{
    font-size: 25px;
    color: var(--main-color);
    width: 42px;
    height: 42px;
    border: 2px solid var(--main-color);
    line-height: 42px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    margin: 0 10px;
    transition: 0.3s ease-in-out;
}

.footer .social a:hover{
    transform: scale(1.2)translateY(-10px);
    background-color: var(--main-color);
    color: var(--text-color);
    box-shadow: 0 0 25px var(--main-color);
}

.footer ul{
    margin-top: 0;
    padding: 0;
    font-size: 18px;
    line-height: 1.6rem;
    margin-bottom: 0;
    text-align: center;
}

.footer ul li a{
    color: white;
    border-bottom: 3px solid transparent;
    transition: 0.3s ease-in-out;
}

.footer ul li a:hover{
    border-bottom: 3px solid var(--main-color);
}

.footer ul li{
    display: inline-block;
    padding: 0 15px;
}

.footer .copyright{
    margin-top: 50px;
    text-align: center;
    font-size: 16px;
    color: white;
}

@media(max-width:1200px){
    html{
        font-size: 55%;
    }
    .projects-container{
        padding-bottom: 7rem;
        grid-template-columns: repeat(1, 1fr);
        margin: 0 5rem;
    }
}
@media(max-width:1000px){
    header{
        padding: 2rem 3%;
    }
    section{
        padding: 10rem 3% 2rem;
    }
    .service{
        padding-bottom: 7rem;
    }
    .footer{
        padding:2rem 3%;
    }
}
@media(max-width:995px){
    #menu-icon{
        display: block;
    }
    .navbar{
        position: absolute;
        top:100%;
        right: o;
        width: 50%;
        border-left: 3px solid var(--main-color);
        border-bottom: 3px solid var(--main-color);
        border-top-left-radius: 2rem;
        padding: 1rem 3%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
    }.navbar .active{
        display: block;
    }
    .navbar a{
        display: block;
        font-size: 2rem;
        margin:3rem 0;
    }
    .home{
        flex-direction: column;
        margin: 5rem 4rem;
    }
    .home-content h3{
        font-size: 2.6rem;
    }
    .home-content h1{
        font-size: 5rem;
    }
    .home-img img{
        width: 70vw;
        margin-top: 4rem;
    }
    .service-box{
        margin: 0 5rem;
    }
    .service h2{
        margin-bottom: 3rem;
    }
    .projects h2{
        margin-bottom: 3rem;
    }
    .timeline-items::before{
        left: 7px;
    }
    .timeline-item:nth-child(odd){
        padding-right: 0;
        text-align: center;
    }
    .timeline-item:nth-child(odd),
    .timeline-item:nth-child(even){
        padding-left: 37px;
    }
    .timeline-dot{
        left: 0;
    }
}
   </style>
    <header class="header">
        <a href="/home" class="logo">Naufal<span>Alfan</span></a>

        <i class="fa-solid fa-bars" id="#menu-icons"></i>

        <nav class="navbar">
            <a href="/home" class="active">Home</a>
            <a href="#service">Service</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">

        <div class="home-content">
            <h1>Hi, it's <span>Naufal</span></h1>
            <h3 class="text-animation">
                i'm a <span></span>
            </h3>
            <p>Lahir Di Sukabumi 14 Januari 2008 
               Suka maen basket dari lahir
               Ngoding juga.
               Semua Bisa!
            </p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/naufaalfl/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/naufaalfl"><i class="fa-brands fa-github"></i></a>
                <a href="https://open.spotify.com/user/9yohdmuzwm8j5kqgn9igptmx5?si=a79374a3005d46a9"><i class="fa-brands fa-spotify"></i></a>
            </div>

            <a href="" class="btn">HIRE
                <i class="fa-solid fa-briefcase"></i>
            </a>
        </div>

        <div class="home-img">
            <img src="foto/bgc.jpg" alt="">
        </div>
    </section>

    <section class="service" id="service">
        <h2 class="heading">Service</h2>

        <div class="service-container">
            <div class="service-box">
                <i class="fa-solid fa-palette"></i>
                <h3>Web Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa perferendis repudiandae ratione praesentium voluptas ab tempore sequi necessitatibus tempora, eligendi qui ad dicta, atque porro doloremque quaerat quibusdam et explicabo?</p>
                <a href="/design" class="btn">Click</a>
            </div>
            <div class="service-box">
                <i class="fa-solid fa-server"></i>
                <h3>FrontEnd Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa perferendis repudiandae ratione praesentium voluptas ab tempore sequi necessitatibus tempora, eligendi qui ad dicta, atque porro doloremque quaerat quibusdam et explicabo?</p>
                <a href="#" class="btn">Click</a>
            </div>
            <div class="service-box">
                <i class="fa-solid fa-code"></i>
                <h3>Athelete</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa perferendis repudiandae ratione praesentium voluptas ab tempore sequi necessitatibus tempora, eligendi qui ad dicta, atque porro doloremque quaerat quibusdam et explicabo?</p>
                <a href="/atlet" class="btn">Click</a>
            </div>
        </div>
    </section>

    <section class="Projects" id="projects">
        <h2 class="heading">Project</h2>

        <div class="projects-container">

            <div class="projects-box">
                <img src="foto/y.png" alt="">
                <div class="projects-info">
                    <h4>Graphic Design</h4>
                    <p></p>

                </div>
            </div>
            <div class="projects-box">
                <img src="foto/php.png" alt="">
                <div class="projects-info">
                    <h4>Aplikasi</h4>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sit esse, eveniet dolorum ipsum vitae, aliquam ducimus rerum voluptatibus suscipit ipsa odio a quasi tenetur, obcaecati minus laudantium atque itaque.</p> --}}

                </div>
            </div>
            <div class="projects-box">
                <img src="foto/joker.gif" alt="">
                <div class="projects-info">
                    <h4>Graphic Design</h4>
                    <p></p>

                </div>
            </div>
        </div>
    </section> 


    <section class="timeline-section" id="education">
       <h2 class="heading">Education</h2>

       <div class="timeline-items">


        <div class="timeline-item">

            <div class="timeline-dot"></div>
            <div class="timeline-date">2013</div>
            <div class="timeline-content">
                <h3>PlayGroup</h3>
                <p>TK IT Al-Husna (Sukabumi)</p>

            </div>
        </div>
        <div class="timeline-item">

            <div class="timeline-dot"></div>
            <div class="timeline-date">2014</div>
            <div class="timeline-content">
                <h3>Elementary School</h3>
                <p>SD Negeri 1 CIDAHU (Sukabumi) </p>

            </div>
        </div>
        <div class="timeline-item">

            <div class="timeline-dot"></div>
            <div class="timeline-date">2020</div>
            <div class="timeline-content">
                <h3>Junior High School</h3>
                <p>SMP Negeri 2 CICURUG (Sukabumi)</p>

            </div>
        </div>
        <div class="timeline-item">

            <div class="timeline-dot"></div>
            <div class="timeline-date">2023</div>
            <div class="timeline-content">
                <h3>Senior High School</h3>
                <p>SMK WIKRAMA BOGOR </p>

            </div>
        </div>
       </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="#">

            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Phone Number">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">

            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="social">
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/naufaalfl/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/naufaalfl"><i class="fa-brands fa-github"></i></a>
            <a href="https://open.spotify.com/user/9yohdmuzwm8j5kqgn9igptmx5?si=a79374a3005d46a9"><i class="fa-brands fa-spotify"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>

            <li>
                <a href="#service">Service</a>
            </li>

            <li>
                <a href="#home">About Me</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

            <li>
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
        <p class="copyright">
            &copy; Naufal Alfan 
        </p>
    </footer>

    


    <script src="script.js"></script>
</body>
</html>