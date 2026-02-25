<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h2> Purchase Form </h2>
            <form class="form-2">
                <span>
                    <label for="Purchase"> Purchase No:</label>
                    <input type="text" id="name" purchase="name">
                </span>
                <span>
                    <label for="name"> Invoice No: </label>
                    <input type="text" id="name" name="name">
</span>
<span>
                    <label for="name of items"> Name of item</label>
                    <input type="text" id="name" CGST="name">
</span>
<span>

                    <label for="Quantity"> Quantity</label>
                    <input type="text" id="name" CGST="name">
</span>
<span>
                    <label for="Rate Per"> Rate Per</label>
                    <input type="text" id="name" CGST="name">
</span>
<span>                                                                     
                    <label for="Amount"> Amount</label>
                    <input type="text" id="name" CGST="name">
</span>

<span>

                    <label for="CGST"> CGST</label>
                    <input type="number" id="name" CGST="name">
                </span>
                <span>
                    <label for="SGST"> SCST</label>
                    <input type="number">
                </span>
                <span>
                <label for="Description:"> Description:</label>
                <input type="text">
                </span>
                <span>
                    <label for="Total"> Total </label>
                    <input type="number">
                </span>
                               <div>
                    <button class="button">Submit</button>
</div> 
        </section>
    
</body>
</html>