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
            <h2>Book your Appointment</h2>
            <form class="form-1">
                <span>
                    <label for="name"> Full Name: </label>
                    <input type="text" id="name" name="name">
                </span>
                <span>
                    <label for="Phone"> Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </span>
                <span>
                    <label for="Service">Select Service: </label>
                    <select id="service" name="service">
                        <option value="">-- Choose a service --</option>
                        <option value="repair">Repair</option>
                        <option value="other">Other</option>
                    </select>
                </span>
                <span>
                    <label for="date">Preferrred Date:</label>
                    <input type="date" id="date" name="time">
                </span>
                <span>
                    <label for="notes"> Additional Notes:</label>
                    <input type="notes" name="notes" rows="4">
                </span>
                <span>
                    
                </span>
                <div>
                    <button class="button">Submit</button>
</div>
            </form>
        </section>
    </main>
    <footer>
        <?php require 'footer.php' ?>
    </footer>
</body>

</html>