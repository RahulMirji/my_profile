<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Footer Example</title>
    <?php include "nav.php"; ?>
    <style>
    footer {
        position:relative;
        background-color: #3c3c3c;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        border-top: none; /* Ensure there's no border */
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .social-media {
        margin-bottom: 20px;
    }

    .social-media a {
        display: inline-block;
        margin: 0 10px;
        transition: transform 0.3s;
    }

    .social-media img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .social-media a:hover img {
        transform: scale(1.1);
    }

    .contact-info p {
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        .social-media img {
            width: 30px;
            height: 30px;
        }
    }

    </style>
</head>
<body>
    <footer>
      <div class="footer-content">
          <div class="social-media">
              <a href="https://www.facebook.com/rahul.mirji.9" target="_blank">
                  <img src="Images/facebook.jpg" alt="Facebook">
              </a>
              <a href="https://www.instagram.com/rahul__mirji/" target="_blank">
                  <img src="Images/insta.jpg" alt="Instagram">
              </a>
              <a href="#" target="_blank">
                  <img src="Images/twitter.jpg" alt="Twitter">
              </a>
              <a href="https://in.linkedin.com/in/rahul-mirji-7764551ba" target="_blank">
                  <img src="Images/linkedin.jpg" alt="LinkedIn">
              </a>
          </div>
          <div class="contact-info">
              <p>Email: rahul.mirji@example.com</p>
              <p>Phone: 123-456-7890</p>
          </div>
      </div>
    </footer>
</body>
</html>
