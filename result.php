<?php
$user_name= $_GET['user-name'];
$cens_word=$_GET['cens-word']
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>

    <div class="container py-4 bg-danger-subtle my-4 rounded-2 ">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center  ">
                <h1 class="fw-bolder text-uppercase text-danger-emphasis display-3">Analizziamo la tua storia</h1>


            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <form action="" method="GET" class="d-flex flex-column align-items-baseline  gap-3">
                    <div>
                        <label for="" class="fw-bold fs-3 ">Ecco il tuo testo:</label>
                    </div>
                    
                    <textarea type="text-area" name="user-name" placeholder="Siamo curiosi di leggerla" id="" class="rounded-3 shadow "  style="height: 300px; width: 500px;" >
                    <?php
                    echo $user_name;
                    // $user_nameSeparato = explode(" ", $user_name);
                    // var_dump($user_nameSeparato);
                    ?>
                    </textarea>
                    <button class="btn btn-secondary">
                        <?php
                        $userResult = strlen($user_name);
                        
                        echo "La lunghezza del testo è <strong>$userResult</strong>"       
                        ?>
                    </button>
                    
                </form>


            </div>


        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <form action="result.php" method="GET" class="d-flex flex-column align-items-baseline  gap-3">
                    <div>
                        <label for="" class="fw-bold fs-3 ">Ecco i tuoi errori:</label>
                    </div>
                    
                    <textarea type="text-area" name="user-name" placeholder="Siamo curiosi di leggerla" id="" class="rounded-3 shadow "  style="height: 300px; width: 500px;" >
                    <?php
                    
                    
                    $censWords= str_replace($cens_word,'***',$user_name);
                    echo $censWords;

                    ?>
                    </textarea>
                    <button class="btn btn-secondary">
                        <?php
                        echo "Le parole che non puoi utilizzare sono <strong>$cens_word</strong> <br>";
                        
                        
                        $censResult = strlen($censWords);
                        
                        echo "Le lunghezza della Frase censurata è <strong>$censResult</strong>";       
                        
                        ?>

                    </button>
                    
                </form>


            </div>

        </div>
    </div>







    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</body>
</html>