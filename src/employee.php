<?php

session_start();

// $userId = $_GET["id"];

// function getEmployee($id)
// {
//     $employeesJsonFile = "./../resources/employees.json";
//     // TODO implement it
//     if(file_exists($employeesJsonFile)) {
//         // If employees database exist, load all employees
//         $jsonData = file_get_contents($employeesJsonFile);
//         $employeesData = json_decode($jsonData, true);
//     }

//     foreach($employeesData as $employee) {
//         if ($employee["id"] === $id) {
//             return $employee;
//         }
//     }
//     return null;
// }

// $employeeData = getEmployee($userId);
// print_r($employeeData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web site " />
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include("./../assets/css/main.css"); ?>
    </style>
</head>

<body>
<?php include("./../assets/html/header.html") ?>

<main class="main container">
    <?php
        if (isset($_SESSION["message"]) && $_SESSION["message"] === "Successfully add new employee") {
            echo "<div class='alert alert-primary mb-3' role='alert'>Add successfully new employee!</div>";
            unset($_SESSION['message']);
        }
    ?>
    <form
        class="row g-3"
        method="POST"
        action="./library/addNew.php"
    >
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="<?php if(isset($employeeData['name']) && $employeeData['name']) echo $employeeData['name']; ?>"
            >
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input
                type="text"
                class="form-control"
                id="lastName"
                name="lastName"
                value="<?php if(isset($employeeData['lastName'])) echo $employeeData['lastName']; ?>"
            >
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email Address</label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="email"
                value="<?php if(isset($employeeData['email'])) echo $employeeData['email']; ?>"
            >
        </div>
        <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" class="form-select" name="gender">
                <option selected>Choose...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php if(isset($employeeData['city'])) echo $employeeData['city']; ?>">
        </div>
        <div class="col-md-6">
            <label for="streetAddress" class="form-label">Street Address</label>
            <input type="text" class="form-control" id="streetAddress" name="streetAddress" value="<?php if(isset($employeeData['streetAddress'])) echo $employeeData['streetAddress']; ?>">
        </div>

        <div class="col-md-6">
            <label for="state" class="form-label">Sate</label>
            <input type="text" class="form-control" id="state" name="state" value="<?php if(isset($employeeData['state'])) echo $employeeData['state']; ?>">
        </div>
        <div class="col-md-6">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php if(isset($employeeData['age'])) echo $employeeData['age']; ?>">
        </div>

        <div class="col-md-6">
            <label for="postalCode" class="form-label">Postal Code</label>
            <input type="number" class="form-control" id="postalCode" name="postalCode" value="<?php if(isset($employeeData['postalCode'])) echo $employeeData['postalCode']; ?>">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?php if(isset($employeeData['phoneNumber'])) echo $employeeData['phoneNumber']; ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
            <button type="submit" class="btn btn-secondary">Return</button>
        </div>
    </form>
</main>

<?php include("./../assets/html/footer.html") ?>
</body>
</html>

