<?php
    if(isset($_POST['submit'])){

        $fname = $_POST['fname'].'_';
        $lname = $_POST['lname'].'_';
        $phone = $_POST['phone'].'_';
        $email = $_POST['email'].'_';
        $class = $_POST['class'].'_';
        $roll = $_POST['roll'].'_';

        $imgFolder = 'uploads/';
        $imgname= $_FILES['file']['name'];

        $tmp_image_name = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmp_image_name, $imgFolder . basename($_FILES['file']['name'] ));

        $all = $fname.$lname.$phone.$email.$class.$roll.$imgname;

        $myfile = fopen($all, "w");
       
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shak Rasel Dealika - Golakandail Pre-cadet Academy</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">গোলাকান্দাইল প্রি-ক্যাডেট একাডেমি এন্ড মডেল হাই স্কুল</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">খেলা</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">নিয়ম</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">উত্তর প্রদান</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact1">প্রস্তুত কারক</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h3 class="fw-bolder">গোলাকান্দাইল প্রি-ক্যাডেট একাডেমি এন্ড মডেল হাই স্কুল এর কুইজ পাতায় তোমাকে স্বাগতম।</h3>
                <p class="lead">চলো খেলা শুরু করি</p>
                <a class="btn btn-lg btn-light" href="#about">শুরু কর</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>September মাসের খেলা</h2>
                        <img src="assets/quiz_1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>নিয়ম</h2>
                        <p class="lead">সুডোকু ছকে ৯X৯=৮১টি ঘর আছে। এই ৮১টি ঘর আবার ৯টি ছোট ছোট বর্গে বিভক্ত। প্রতিটি ছোট বর্গে ৯টি করে ঘর আছে। খেলার শুরুতে কিছু কিছু ঘরে ১ থেকে ৯ পর্যন্ত সংখ্যা গুলোর কয়েকটি বসানো থাকে। বেশী সংখ্যা বসানো থাকলে সমাধান করা সহজ। যত কম সংখ্যা শুরুতে বসানো থাকবে সমাধান করা তত কঠিন হবে। <br/><br/>

সুডোকু ছক পুরনের ক্ষেত্রে কিছু নিয়ম মেনে চলতে হবে। যেমন- <br/><br/>

(১) প্রতিটি কলাম (লম্বালম্বি) ও প্রতিটি রো (আড়াআড়ি) তে যে ৯টি করে ঘর আছে সেগুলোতে ১-৯ পর্যন্ত সংখ্যাগুলো ঠিক একবার করে বসাতে হবে। কোনটি একবারের বেশী ব্যবহার করা যাবে না।<br/><br/>

(২) প্রতিটি ছোটবর্গের ৯টি ঘরেও ১-৯ পর্যন্ত সংখ্যাগুলো ঠিক একবার করে বসাতে হবে। কোনটি একবারের বেশী ব্যবহার করা যাবে না। </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <h2>Submition</h2>
            <form class="form-inline" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-4 mb-3 d-inline-block">
      <label for="validationServer01">First name</label>
      <input type="text" name="fname" class="form-control" id="validationServer01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-4 mb-3 d-inline-block">
      <label for="validationServer02">Last name</label>
      <input type="text" name="lname" class="form-control" id="validationServer02" placeholder="Last name" value="" required>
    </div>
  </div>

    <div class="form-row">
    <div class="col-md-4 mb-3 d-inline-block">
      <label for="phone">Phone Number</label>
      <input type="number" name="phone" class="form-control" id="phone" placeholder="01825-690912" value="" required>
    </div>
    <div class="col-md-4 mb-3 d-inline-block">
      <label for="email">email</label>
      <input type="text" name="email"class="form-control" id="email" placeholder="abc@gmail.com" value="">
    </div>
  </div>

  <div class="form-row">
    <div class="col-auto my-1 d-inline-block">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Class</label>
      <select class="custom-select mr-sm-2" name="class" id="inlineFormCustomSelect" required>
        <option selected hidden="">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
      </select>
    </div>

    <div class="col-md-3 mb-3 d-inline-block">
      <label for="validationServer04">Roll No</label>
      <input type="number" name="roll" class="form-control" id="validationServer04" placeholder="Ex: 12" required>
    </div>
    <div class="col-md-3 mb-3 d-inline-block">
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
        </div>
  </div>
    <button class="btn btn-primary" onclick="myFunction()"  name="submit" type="submit">Submit form</button>
</form>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Masum Mridha | All Right Resurved</p></div>
        </footer>
        <script>
        function myFunction() {
          alert("Congratulation ! \nThanks for your Answer");
        }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
