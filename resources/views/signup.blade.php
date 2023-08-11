<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>iCLOP</title>
</head>
<!-- This is body test -->

<body>

    <div class="container" style="margin-top: 50px; width: 500px;">
        <p style="text-align: left; font-size: 36px; font-weight: bold; color: #34364A;">New Account</p>
        <p style="text-align: left;">Complete the form below with<br>use your valid data</p>

        <label for="name" class="form-label" style="text-align: left; margin-top: 40px; font-weight: 500">Name</label>
        <input class="form-control" list="datalistOptions" id="name" placeholder="Name" style=" margin-bottom: 20px;">

        <label for="email" class="form-label" style="text-align: left; font-weight: 500;">Email</label>
        <input class="form-control" list="datalistOptions" id="email" placeholder="Email" style=" margin-bottom: 20px;">

        <label for="password" class="form-label" style="text-align: left; font-weight: 500">Password</label>
        <input type="password" class="form-control" list="datalistOptions" id="password" placeholder="Password" style=" margin-bottom: 20px;">

        <label for="confirmPassword" class="form-label" style="text-align: left; font-weight: 500">Confirm
            Password</label>
        <input type="password" class="form-control" list="datalistOptions" id="confirmPassword" placeholder="Confirm Password" style=" margin-bottom: 20px;">

        <label for="teacherName" class="form-label" style="text-align: left; font-weight: 500">Teacher Name</label>
        <select class="form-control" id="teacherName" style="margin-bottom: 20px;">
            <option value="" disabled selected>Choose a Teacher</option>
            <option value="teacher1">Yan Watequlis Syaifudin</option>
            <option value="teacher2">Pramana Yoga Syaputra</option>
            <option value="teacher3">Dwi Puspitasari</option>
        </select>

        <button class="btn btn-primary custom-button-sign-up" style="width: 100%; height: 42px; margin-top: 70px;" onclick="window.location.href='{{ route('dashboard_student') }}'">Sign Up</button>
        <p style="text-align: center; margin-top: 12px; font-weight: 500">Already have an account? <span style="color: #0079FF;" onclick="window.location.href='index.html'">Sign In</span></p>

    </div>

</body>

</html>