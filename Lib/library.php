    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
        session_start();
        
        $host = "localhost";  // Assuming this is your database hostname
        $user = "root";      // Replace with your actual database username
        $pass = "";          // Replace with your actual database password
        $db = "siswa";   // Replace with the correct database name
        
        $mysqli = mysqli_connect($host, $user, $pass, $db) or die("Tidak dapat koneksi ke Database");

        
        ?>
    </body>
    </html>