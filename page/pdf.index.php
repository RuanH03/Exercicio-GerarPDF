<?php include '../script/readFile.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GerarPDF</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <center>
            <section class="section1">
                <div class="container">
                    <table>
                        <thead>
                            <?php foreach($colunas  as $coluna){?>
                                <td><b><?php echo $coluna?></b></td>
                            <?php } ?>
                        </thead>
                        <tbody>
                            <?php foreach($alunos as $aluno){?>
                                <tr>
                                    <?php foreach($aluno as $a){?>
                                        <td><?php echo $a?></td>
                                        <?php } ?>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <br><br>
            <section class="section2">
                <form action="../../PDF/script/pdf.php" method="post">
                    <button type="submit">Gerar PDF</button>
                </form>
            </section>
        </center>
    </body>
</html>