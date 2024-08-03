<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <?php include "nav.php"; ?>
    <style>
        h1 {
            color: blue;
            margin-bottom: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        section {
            margin: 30px 0; /* Increased gap between sections */
            padding: 0 15px; /* Added padding for better content fit */
        }

        section h2 {
            border-bottom: 2px solid #0056b3;
            padding-bottom: 8px;
            margin-bottom: 15px;
            color: #333;
        }

        ul {
            padding-left: 20px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
        }

        button {
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <header>
            <section>
            <br>
            <br>
            <h1>Rahul Mirji</h1>
            <p>Your Address, City, State, ZIP Code</p>
            <p>Email: rahul@example.com | Phone: +1 234-567-890</p>
            <p><a href="https://www.linkedin.com/in/rahul" target="_blank">LinkedIn</a> | <a href="https://github.com/rahul" target="_blank">GitHub</a></p>
            <br>
            <br>
            </section>
        </header>
        <section>
            <br>
            <h2>Objective</h2>
            <p>Enthusiastic and dedicated 2nd-year BE AIML student at HKBK College of Engineering with a strong foundation in HTML, Java, CSS, and Python. Seeking opportunities to apply my skills and gain practical experience in the field of Artificial Intelligence and Machine Learning.</p>
            <br>
        </section>
        <section>
            <br>
            <h2>Education</h2>
            <p><strong>HKBK College of Engineering, Bangalore, India</strong></p>
            <p>Bachelor of Engineering (BE) in Artificial Intelligence and Machine Learning (Expected Graduation: 2026)</p>
            <br>
        </section>
        <section>
            <br>
            <h2>Skills</h2>
            <ul>
                <li><strong>Programming Languages:</strong> Python, Java, HTML, CSS</li>
                <li><strong>Tools & Technologies:</strong> Git, GitHub, VS Code</li>
                <li><strong>Web Development:</strong> HTML, CSS, JavaScript</li>
                <li><strong>Data Analysis:</strong> Python (NumPy, Pandas), Excel</li>
                <li><strong>Machine Learning:</strong> Basic understanding of ML concepts and algorithms</li>
            </ul>
            <br>
        </section>
        <section>
            <br>
            <h2>Projects</h2>
            <ul>
                <li><strong>College Management Web Application:</strong> Developed a web-based application to manage student and faculty information using HTML, CSS, and JavaScript. Implemented responsive design and user authentication features.</li>
                <li><strong>Real-Time Bus Tracking Mobile App:</strong> Built a mobile application using Java for tracking real-time locations of buses. Integrated Google Maps API for live location tracking and route planning.</li>
                <li><strong>Stock Price Prediction Model:</strong> Created a machine learning model to predict stock prices using Python. Utilized libraries such as NumPy, Pandas, and scikit-learn for data preprocessing and model training.</li>
            </ul>
            <br>
        </section>
        <section>
            <br>
            <h2>Experience</h2>
            <ul>
                <li><strong>Coding Club Member, HKBK College of Engineering:</strong> Collaborated with peers to solve complex coding problems and participated in hackathons. Assisted in organizing coding workshops and events.</li>
                <li><strong>Volunteer, Community Service Projects:</strong> Taught basic computer skills to underprivileged children. Engaged in various community outreach programs to promote digital literacy.</li>
            </ul>
            <br>
        </section>
        <section>
            <br>
            <h2>Achievements</h2>
            <ul>
                <li>Hackathon Participant: Participated in college-level hackathons and coding competitions.</li>
                <li>Academic Excellence: Consistently maintained a strong academic record.</li>
            </ul>
            <br>
        </section>
        <section>
            <br>
            <h2>Certifications</h2>
            <ul>
                <li>Python for Everybody: Completed online courses on Python programming.</li>
                <li>Introduction to HTML and CSS: Online certification for web development basics.</li>
            </ul>
            <br>
        </section>
        <section>
            <br>
            <h2>Interests</h2>
            <ul>
                <li>Artificial Intelligence and Machine Learning</li>
                <li>Web Development</li>
                <li>Coding Challenges and Competitions</li>
                <li>Community Service and Teaching</li>
            </ul>
            <br>
        </section>
    </div>
    <div>
        <center>
            <button><a href="index.php">Back Home</a></button>
        </center>
    </div>
    <footer>
        <?php
        include "footer.php"
        ?>
        </footer>
</body>
</html>
