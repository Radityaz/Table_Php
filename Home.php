<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="margin: 50px;" >
    <h1>List Data Siswa</h1>
    <br>
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "data_murid";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            $sql = "SELECT * FROM datasiswa";
            $result = $connection->query($sql);

            if (!$result) {
                die("Connecttion failed: ". $connection->connect_error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["telepon"] . "</td>
                    <td>" . $row["alamat"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>