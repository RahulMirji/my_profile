<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include "nav.php"
    ?>
    <style>
        /* Contact Info Styles */
.contact-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.contact-item {
    flex: 1;
    min-width: 200px;
    margin: 1rem;
}

.contact-item h3 {
    margin-bottom: 0.5rem;
}

.contact-item p, .contact-item a {
    color: #333;
}

.contact-item a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <section id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to reach out to me through any of the following methods:</p>
        <div class="contact-info">
            <div class="contact-item">
                <h3>Email</h3>
                <p><a href="mailto:rahul@example.com">rahul@example.com</a></p>
            </div>
            <div class="contact-item">
                <h3>Phone</h3>
                <p><a href="tel:+1234567890">+1 234-567-890</a></p>
            </div>
            <div class="contact-item">
                <h3>Address</h3>
                <p>HKBK College of Engineering, Bangalore, India</p>
            </div>
            <div class="contact-item">
                <h3>Social Media</h3>
                <p>
                    <a href="https://www.linkedin.com/in/rahul" target="_blank">LinkedIn</a> |
                    <a href="https://github.com/rahul" target="_blank">GitHub</a> |
                    <a href="https://twitter.com/rahul" target="_blank">Twitter</a>
                </p>
            </div>
        </div>
        <h3 align="center" >Contact Form</h3>
        <form action="your-form-handler-url" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </section>
    <div>
        <center>
       <button> <a href="index.php" class="back-home">Back Home</a></button>
        </center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <footer>
    <?php
    include "footer.php"
    ?>
    </footer>
</body>
</html>
