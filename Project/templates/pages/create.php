<html>
    <head>

    </head>
    <body>
        <div class="header">
            <h1>Moje notatki</h1>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/">Lista notatek</a>
                    </li>
                    <li>
                        <a href="/?action=create">Nowa notatka</a>
                    </li>
                </ul>
            </div>

            <div>
                Nowa notatka
                <?php echo htmlentities($action) ?>
            </div>
        </div>

        <div class="footer">

        </div>
    </body>
</html>