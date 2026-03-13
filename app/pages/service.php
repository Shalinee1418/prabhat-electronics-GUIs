<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php require 'header.php'; ?>
    </header>
    <main>
        <aside>
            <?php require 'aside.php' ?>
        </aside>
        <section>
            <h2>Service - Home</h2>
            <a href="new-service.php" class="button">New Appointment</a>
            <table class="table-1" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Work order #</th>
                        <th>Customer Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>WO123456</td>
                        <td>Shalinee Sharma</td>
                        <td><a href="">View</a> | <a href="">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <?php require 'footer.php' ?>
    </footer>
</body>

</html>