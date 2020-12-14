<?php
    require_once __DIR__ . '/functions/imc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <title>Cálculo de IMC</title>
  </head>

  <body>
    <div class="row">
        <div class="container-fluid">
            <h1 class="text-center">Cálculo de IMC</h1>
            <hr/>

            <div class="col-sm-12">
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="weight">Peso:</label>
                            <input type="number" step="0.01" id="weight" name="weight" class="form-control" placeholder="Peso" value="<?= $_POST['weight'] ?? '' ?>">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="height">Altura:</label>
                            <input type="number" step="0.01" id="height" name="height" class="form-control" placeholder="Altura" value="<?= $_POST['height'] ?? '' ?>">
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" name="calc" class="btn btn-primary"><i class="fa fa-cogs"></i> Calcular</button>
                            &nbsp;
                            <button type="button" class="btn btn-danger btn-clear"><i class="fa fa-times"></i> Limpar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 result">
                <?php
                    if (isset($_POST['calc'])) {
                        echo "<hr/>";
                        echo "IMC: " . calc($_POST['weight'], $_POST['height']);
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.btn-clear').on('click', function () {
            $('#weight').val('');
            $('#height').val('');
            $('.result').html('');
        });
    </script>
  </body>
</html>