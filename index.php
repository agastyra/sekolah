<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <title>Sekolah</title>
        <link rel="preconnect"
            href="https://fonts.googleapis.com">
        <link rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="style.css">
    </head>

    <body>
        <h1>Sekolah dasar</h1>

        <div class="form-register">
            <form action="register.php"
                method="post">

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email"
                        name="email"
                        id="email">
                </div>

                <div class="form-group">
                    <label for="nama">Nama: </label>
                    <input type="text"
                        name="nama"
                        id="nama">
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password"
                        name="password"
                        id="password">
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
    </body>

</html>
