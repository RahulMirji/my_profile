<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include "nav.php"
    ?>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    padding-top: 60px; /* Space for the fixed nav */
}

/* About Me Page Styles */
.about-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.about-container h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #007BFF;
    text-align: center; /* Center the heading */
}

.about-container p {
    line-height: 1.6;
    margin-bottom: 20px;
    font-family: 'Times New Roman', Times, serif;
    text-align: justify; /* Justify the text for better readability */
}

.about-container .highlight {
    color: #007BFF;
    font-weight: bold;
}

.social-links {
    margin-top: 30px;
    text-align: center; /* Center the social links */
}

.social-links a {
    color: #007BFF;
    text-decoration: none;
    margin-right: 15px;
    font-size: 1.2em;
    transition: color 0.3s; /* Smooth transition for hover effect */
}

.social-links a img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.social-links a:hover {
    text-decoration: underline;
    color: #0056b3; /* Darker shade on hover */
}

/* Button Style */
button {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s; /* Smooth transition for hover effect */
    margin-top: 20px;
}

button a {
    color: white;
    text-decoration: none;
}

button:hover {
    background-color: #0056b3; /* Darker shade on hover */
}
h1{

}

    </style>
</head>
<body>

<div class="about-container">
    <h1>About Me</h1>
    <p>Hello! My name is <span class="highlight">Rahul</span>, and I am currently a second-year student pursuing a Bachelor of Engineering degree in Artificial Intelligence and Machine Learning (AIML) at HKBK College of Engineering. Ever since I was young, I have been fascinated by the world of technology and how it continues to revolutionize our daily lives. This passion led me to delve deeper into the realms of AI and ML, fields that are at the forefront of innovation today.</p>
    <p>My academic journey has equipped me with a strong foundation in various programming languages and tools. I have a solid grasp of HTML, CSS, and Java, which I utilize to develop web applications and interactive user interfaces. My proficiency in Python has enabled me to explore and implement machine learning algorithms, further enhancing my understanding and skills in AI.</p>
    <p>At HKBK College of Engineering, I am actively involved in numerous projects that challenge my technical abilities and problem-solving skills. One of my significant projects involves developing a College Enrollment Registration system that streamlines the process of student admissions. This project has not only honed my skills in backend and frontend development but has also provided me with valuable insights into database management and file handling.</p>
    <p>In addition to my academic pursuits, I am a proactive member of various tech communities and clubs. These platforms offer me the opportunity to collaborate with like-minded individuals, share knowledge, and stay updated with the latest advancements in technology. Networking through these communities has been instrumental in my growth, providing me with mentorship and guidance from industry experts.</p>
    <p>Outside of my technical endeavors, I enjoy engaging in creative activities and exploring new hobbies. Photography and traveling are among my favorite pastimes, allowing me to capture the beauty of the world through my lens and gain new perspectives. These experiences often inspire my work, bringing a fresh and creative approach to my projects.</p>
    <p>I am also active on various social media platforms, including Facebook, Instagram, Twitter, and LinkedIn, where I share my journey, connect with peers, and participate in tech discussions. Feel free to reach out to me through these platforms or via email. I am always open to new opportunities, collaborations, and discussions about the future of technology.</p>
    <p>Thank you for visiting my page. I look forward to connecting with you and exploring the endless possibilities that AI and ML have to offer!</p>

    <!-- <div class="social-links">
        <a href="https://www.facebook.com/rahul.mirji.9"><img src="Images/facebook.jpg" alt="img"></a>
        <a href="https://www.instagram.com/rahul__mirji/"><img src="Images/insta.jpg" alt="img"></a>
        <a href="https://www.twitter.com"><img src="Images/twitter.jpg" alt="img"></a>
        <a href="https://in.linkedin.com/in/rahul-mirji-7764551ba"><img src="Images/linkedin.jpg" alt="img" width="6%" height="6%"></a>
    </div> -->
    <div>
        <center>
       <button> <a href="index.php" class="back-home">Back Home</a></button>
        </center>
    </div>
</div>
<footer>
    <?php
    include "footer.php"
    ?>
</footer>
</body>
</html>
