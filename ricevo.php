<html>
    <body>
        <h1> prodotto aggiunto </h1>

        <?php

        $nome = $_POST ['nome'];
        $descrizione = $_POST ['descrizione'];
        $prezzo = $_POST ['prezzo'];

        
        
            echo "<p>" , $nome , "<p>";
            echo "<p>" , $descrizione , "<p>";
            echo "<p>" , $prezzo , "<p>";

        ?>

</body>

</html>

