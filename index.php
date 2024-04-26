<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/styles/style.css" />

  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="/img/shapes/bluesquare.png" class="shape square" alt="" />
          <img src="/img/shapes/bluecircle.png" class="shape circle" alt="" />
          <img
            src="/img/shapes/halfcircleblue.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="/img/shapes/halfcircleblue.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="/img/shapes/XICON.png" class="shape xshape" alt="" />
          <img src="/img/shapes/wave101.png" class="shape wave wave1" alt="" />
          <img src="/img/shapes/wave101.png" class="shape wave wave2" alt="" />
          <img src="/img/shapes/bluetriangle.png" class="shape triangle" alt="" />
          <img src="/img/shapes/letters.png" class="letters" alt="" />
          <img src="/img/shapes/points1purple.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="links">
              <ul>
                <li>
                  <a href="#header">About</a>
                </li>
                
                <li>
                  <a href="#services">Skills</a>
                </li>

                <li>
                  <a href="#about">School Studies</a>
                </li>
                
                <li>
                  <a href="#contact">Contact</a>
                </li>
              </ul>
            </div>
            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
           
            <div class="column-1">
              <h1>BIOGRAPHY~</h1>
              <h3 class="header-title">Judi Albaghajati</h3>
              <p class="text">
                A third-year Computer Science student with a passion for technology and innovation. I am highly proficient in multiple programming languages, and I am dedicated to applying my skills to effectively contribute to challenging projects and real-world applications. Interested in web development back-end and front-end, game development, artificial intelligence, and opportunities to gain hands-on experience in the field of computer science.
              </p>
              <a href="/resume.pdf" class="btn" download>Download CV</a>
              <a href="/resume.pdf" class="btn" target="_blank">Preview CV</a>
            </div>

            <div class="column-2 image">
              <img
                src="/img/shapes/points2purple.png"
                class="points points2"
                alt=""
              />
              <img src="/img/Black White Minimalist Logo.gif" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      <section class="services section" id="services">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What I Do">Skills</h3>
            <p class="text">

              "I have a passion in technology that along with curiosity serves as the main drive that motivates me to learn and dig deeper."</div>

          <div class="cards">
            <div class="card-wrap">
              <img
                src="/img/shapes/points3purple.png"
                class="points points1 points-sq"
                alt=""
              />
              <div class="card" data-card="UI/UX">
                <div class="card-content z-index">
                  <img src="/img/webdevl.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Design</h3>
                  <p class="text">
                    With a strong technical expertise in HTML, CSS, and JavaScript, I specialize in crafting user-friendly and captivating websites to deliver the best experience.
                  </p>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <div class="card" data-card="Code">
                <div class="card-content z-index">
                  <img src="/img/webdev2.png" class="icon" alt="" />
                  <h3 class="title-sm">Software Development</h3>
                  <p class="text">
                    I have experience in various coding languages and frameworks, from web development to game development. I strive to create efficient software with the best standerds.
                  </p>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <img
                src="/img/shapes/points3purple.png"
                class="points points2 points-sq"
                alt=""
              />
              <div class="card" data-card="App">
                <div class="card-content z-index">
                  <img src="/img/game-development.png" class="icon" alt="" />
                  <h3 class="title-sm">Game Development</h3>
                  <p class="text">
                    I am a hobbiest game developer with experience in multiple game engines and styles. I have a passion in creating unconventional games with special twist that defines them and sets them apart.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Who Am I">School Studies</h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">My Journey</h3>
              <p class="text">
                My journey has started long before I started my Bachelor degree. Fueled by a passion for learning, I've immersed myself in a diverse range of subjects, I was fascinated by programming as it felt like magic! From exploring fundamental concepts to delving into intricate details, my curiosity was my main drive toward learning and exploring deep concepts in the Computer Science field.
                Here are some of my skills I learnt during my education:
                
              </p>
              <div class="skills">
                <div class="skill">
                  <h3 class="skill-title">Python</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="80%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">C language</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">HTML</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">CSS</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="80%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">C#</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="60%"></div>
                  </div>
                </div>
                <div class="skill">
                  <h3 class="skill-title">Flask</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="60%"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column-2 image">
              <img src="/img/shapes/points4purple.png" class="points" alt="" />
              <img src="/img/schoolgif.gif" class="z-index" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="projects">
        <h2>My Projects</h2>
        <div class="project-container">
          <div class="project">
            <img src="/img/beanbot.png" alt="Project 1">
            <h3>Student Information System</h3>
            <p>
              In collaboration with KAUST Smart center, and the project of IED230 course, I and a team of four other developers were able to create a website that customers can order coffee through. Using python and flask we were able to make this website user friendly and the project gained the satisfaction of the judging committie in the innovation center at KAUST.
            </p>
          </div>
          <div class="project">
            <img src="/img/LMS.png" alt="Project 2">
            <h3>Library Management System</h3>
            <p>The Library Management System demonstrates object-oriented programming concepts with python Tkinter package to create a user-friendly GUI. This is the project of Object Oriented Programming course and serves as a demonstration of my OOP</p>
            <a href="https://github.com/Electronic-mind/OOP_Project" class="btn" style="margin: 5%;">Go to Project</a>
          </div>
          <div class="project">
            <img src="/img/cover_img.png" alt="Project 2">
            <h3>AI reinforcement learning simulation</h3>
            <p>A simulation of an AI agent learning to reach a goal. Each time the agent gets the goal it is rewarded, however it should be careful not to touch the wall or it will be punished! The project was made by Unity.</p>
            <a href="https://devopsarcade.itch.io/ai-game" class="btn" style="margin: 5%;">Go to Project</a>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <p class="text">
                Let's connect! Whether you have a project in mind, want to collaborate, then I'm here to listen. Reach out to me through the provided contact details below. I'm excited to hear from you and explore how we can work together to bring ideas to life.
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">Makkah KSA</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">judyalbaghajati1234@gmail.com</p>
                </div>
              </div>
            </div>

            <div class="contact-form">
              <h3 class="title">Contact me</h3>
              <form method="post" action="send_email.php" >
                  <div class="row">
                  <input
                    type="text"
                    class="contact-input"
                    placeholder="Name"
                    id="name"
                    name="name"
                    required
                  />

                </div>

                <div class="row">
                  <input type="email" 
                    class="contact-input" 
                    placeholder="Email" 
                    id="email" 
                    name="email" 
                    required
                  />
                </div>

                <div class="row">
                  <textarea
                    name="message"
                    class="contact-input textarea"
                    placeholder="Message"
                    id="message"
                    name="message"
                    required
                  ></textarea>
                </div>
                <button type="submit" class="btn" name="submit">Send</button>              
              </form>
              
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
              A third-year Computer Science student with a passion for technology and innovation
            </p>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Links</h3>
            <ul>
              <li>
                <a href="#services">Skills</a>
              </li>

              <li>
                <a href="#about">Education</a>
              </li>
              
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2023 All rights reserved | Made by
              <span class="split-text" data-text="FORUM"> TeamCheckMate developers</span>
             
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow me</h3>
              <span class="footer-line"></span>
              <div class="social-media">
                <a href="https://www.linkedin.com/in/judi-albaghajati/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#about" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
