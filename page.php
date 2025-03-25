<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Startup</title>
    <style>
body {
        background: linear-gradient(135deg,rgb(254, 255, 239),rgb(161, 159, 137));
        font-family: 'Arial', sans-serif;
        color: #fff;
        text-align: center;
        font-size: 14px;
        margin: 0;
        padding: 0;
}

.advantage, .about {
    background: rgb(255, 255, 255);
    padding: 30px;
    border-radius: 10px;
    max-width: 800px;
    margin: 50px auto;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
    text-align: left;
}

.head {
    height: 80vh;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    padding: 20px;
    animation: fadeIn 2s ease-in-out;
}

.head h1 {
    font-size: 70px;
    font-weight: bold;
    text-transform: uppercase;
}

.highlight {
    color: #f4c542;
    font-weight: bold;
}

.navbar {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
        nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }
        .nav-link {
            color: white !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ff7eb3 !important;
        }

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
}

.navbar-nav .nav-link {
    font-size: 14px;
    transition: color 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover {
    color: #f4c542 !important;
}

.box {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 234, 255, 0.5);
    transition: transform 0.3s, box-shadow 0.3s;
}

.box:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
}

form {
    background: rgba(23, 2, 2, 0.1);
    padding: 30px;
    border-radius: 15px;
    width: 50%;
    margin: 30px auto;
    box-shadow: 0 0 15px rgba(96, 76, 76, 0.2);
}

.form-control {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}

.btn-primary {
    background-color: #6a11cb;
    border: none;
    padding: 10px 20px;
    font-size: 1.2rem;
    border-radius: 5px;
    transition: background 0.3s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.footer {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    text-align: center;
    padding: 20px 0;
    font-size: 12px;
}

.footer a {
    color: red;
}

button {
    background: linear-gradient(135deg, #ff512f, #dd2476);
    color: white;
    padding: 10px 20px;
    font-size: 14px;
    border: none;
    border-radius: 5px;
}

button:hover {
    background: #f4c542;
    color: black;
}


@media (max-width: 768px) {
    .head {
        height: 60vh;
        padding: 10px;
    }

    .head h1 {
        font-size: 20px;
    }

    .advantage, .about {
        padding: 20px;
        max-width: 90%;
    }

    .navbar-brand {
        font-size: 1.5rem;
    }

    .navbar-nav .nav-link {
        font-size: 1rem;
    }

    form {
        width: 80%;
    }

    button {
        font-size: 12px;
        padding: 8px 16px;
    }
}

@media (max-width: 480px) {
    .head {
        height: 50vh;
        padding: 5px;
    }

    .head h1 {
        font-size: 18px;
    }

    .advantage, .about {
        padding: 15px;
        max-width: 95%;
    }

    .navbar-brand {
        font-size: 1.2rem;
    }

    .navbar-nav .nav-link {
        font-size: 0.9rem;
    }

    form {
        width: 90%;
    }

    button {
        font-size: 10px;
        padding: 6px 12px;
    }
}
.container {
            margin-top: 50px;
        }
    .card {
            background: rgba(148, 123, 123, 0.2);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background: #ff7eb3;
            color: white;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background: #ff4a8d;
            box-shadow: 0px 0px 10px #ff4a8d;
        }
      

   </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="head">
        <h1>WELCOME TO <span class="highlight">BH </span></h1>
        <p class="subtext"><span class="highlight">AI AND TECH </span>STARTUP</p>
    </div>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><h1>  <img src="logo.webp" alt="BH AI & Tech Logo" class="logo" width="5%" height="5%"><span class="highlight"> BH AI & TECH </span> Startup</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="about" id="about">
        <h1>About Us</h1>
        <p>Welcome to <span class="highlight">BH AI & Tech</span>, where innovation meets intelligence! We are a cutting-edge AI and technology startup focused on revolutionizing the digital landscape through <span class="highlight">AI-driven solutions, automation, and intelligent systems</span>. Our goal is to empower businesses with advanced technological tools that enhance efficiency, reduce costs, and drive growth in an increasingly digital world.</p>

        <p>At <span class="highlight">BH AI & Tech</span>, we specialize in <span class="highlight">rapid and efficient project development</span>, ensuring that companies can bring their ideas to life within <span class="highlight">3 to 5 days</span>. Whether it's <span class="highlight">AI-powered web development, automation solutions, or advanced data analytics</span>, we provide tailored solutions designed to <span class="highlight">accelerate growth and maximize potential</span>. Our streamlined processes, powered by AI, allow us to <span class="highlight">deliver high-quality projects with speed, precision, and scalability</span>.</p>

        <p>Beyond development, we are committed to <span class="highlight">ongoing innovation and continuous improvement</span>. We leverage the latest AI advancements to <span class="highlight">automate maintenance, enhance security, and optimize performance</span>—eliminating the need for manual intervention. Our team is dedicated to staying at the forefront of technology, ensuring our clients receive <span class="highlight">state-of-the-art solutions</span> that keep them ahead in their industries.</p>

        <p>At <span class="highlight">BH AI & Tech</span>, we believe in <span class="highlight">building long-term partnerships</span> by offering <span class="highlight">cost-effective, future-proof, and AI-enhanced solutions</span>. Whether you’re a startup looking to launch quickly or an established business aiming to integrate AI into your operations, we provide the expertise and technology to help you succeed in the ever-evolving digital landscape. Let’s shape the future together! 🚀</p>
</div>
    
    <div class="advantage">
        <h1>Advantage</h1>
                <h4>AI-Powered Web Development</h4>
                <ul>
                    <li>Build your website in just 3-5 days.</li>
                    <li>Leverages cutting-edge AI technology.</li>
                    <li>Ensures seamless user experience.</li>
                </ul>
           
      
                <h4>Automated Maintenance</h4>
                <ul>
                    <li>AI handles updates and optimizations.</li>
                    <li>Enhances security with automated monitoring.</li>
                    <li>Reduces manual intervention.</li>
</ul>
                <h4>Tech Solutions</h4>
                <ul>
                    <li>AI-driven automation to boost efficiency.</li>
                    <li>Reduces operational costs.</li>
                    <li>Custom solutions for various industries.</li>
</ul>
                <h4>Fast & Scalable</h4>
                <ul>
                    <li>Delivers projects with speed and reliability.</li>
                    <li>Scales with your business needs.</li>
                    <li>AI-powered performance optimization.</li>
                </ul>  
                <div class="text-center mt-4">
    <div class="row justify-content-center">
        <div class="col-3 col-md-2">
            <img src="1.jpeg" class="img-fluid" alt="Advantage 1"  height="50px" width="50px">
            <p class="fw-bold text-secondary small mt-2">Fast & Scalable</p>
        </div>
        <div class="col-3 col-md-2">
            <img src="2.jpeg" class="img-fluid" alt="Advantage 2" height="50px" width="50px">
            <p class="fw-bold text-secondary small mt-2">Cost-Effective</p>
        </div>
        <div class="col-3 col-md-2">
            <img src="3.jpeg" class="img-fluid" alt="Advantage 3"  height="50px" width="50px">
            <p class="fw-bold text-secondary small mt-2">AI-Driven</p>
        </div>
        <div class="col-3 col-md-2">
            <img src="4.jpeg" class="img-fluid" alt="Advantage 4"  height="50px" width="50px"">
            <p class="fw-bold text-secondary small mt-2">Secure & Reliable</p>
        </div>
    </div>
</div>


      
</div>


<hr>

    <div class="container mt-5" id="services">
    <h1 class="text-center mb-4 text-primary">Our Services</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 shadow-lg text-center p-3">
                <h5 class="card-title text-primary">AI-Powered Web Development</h5>
                <p class="card-text">Get your website built in just 3-5 days with cutting-edge AI technology.</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg text-center p-3">
                <h5 class="card-title text-primary">Automated Maintenance</h5>
                <p class="card-text">AI ensures updates, optimizations, and security—no manual intervention required.</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg text-center p-3">
                <h5 class="card-title text-primary">Tech Solutions</h5>
                <p class="card-text">AI-driven automation tools to boost efficiency and reduce costs.</p>
            </div>
        </div>
    </div>
    <hr>
    <h1  align="center">Contact Us</h1>
    <form action="index.php"method="POST" align="center" id="contact">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name"placeholder="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com"required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">phone number</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="phone"placeholder="number"required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Review</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="review" rows="3"></textarea>
  <button type="submit" name="submit">Submit</button>
</div>
</form>

    
    <?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "mini";



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $review = $_POST['review'] ?? '';

    $sql = "INSERT INTO contact (name, email, phone, review) VALUES ('$name', '$email', '$phone', '$review')";
    if ($conn->query($sql) === TRUE) {
        if(!empty($name)){
            echo "<script>alert('We will contact you soon, thank you!');</script>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}


?><footer class="footer">
    <p>&copy; 2025 BH AI & Tech | Designed by <a href="#">Abhirama BM</a></p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
<div class="about">
    <h3>Reviews</h3>
    <?php


$sql = "SELECT name,review FROM contact";
$review_result = $conn->query($sql);

if (!$review_result) {
    die("Error in query: " . $conn->error);  
}

if ($review_result->num_rows > 0) {
    while ($row = $review_result->fetch_assoc()) {
        echo "<p>". htmlspecialchars($row['name'])."<br>" . htmlspecialchars($row['review']) . "</p>";
    }
} else {
    echo "No reviews yet. Be the first to leave a review!";
}
$conn->close();

?>
</div>
</body>
</html>