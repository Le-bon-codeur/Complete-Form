<?php
// HERE IS THE PHP SOURCE CODE OF DIFFERENT METHODS USED TO SUBMIT AND FORMAT DATA FROM THE MAIN FORM

function dbConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=users", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        throw $e;
    }
}

function add_user($fullname,$datebirth,$email,$gender,$streetname,$streetnumber,$cityname,$postalcode)
{
    // TODO
}

function del_user($fullname,$datebirth,$email)
{
    // TODO
}

function search_user($fullname,$datebirth,$email)
{
    // TODO
}

function get_all_users()
{
    try {
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetch();
    } catch(PDOException $e) {
        throw $e;
    }
}