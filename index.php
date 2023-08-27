<?php 
    //footer
    include_once('includes/header.php');
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3>Clientes</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Sobrenome:</th>
                        <th>Email:</th>
                        <th>Idade:</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Lussati</td>
                        <td>Santos</td>
                        <td>lussatisantos10@gmail.com</td>
                        <td>20</td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="includes/adicionar.php" class="btn">Adicionar cliente</a>
        </div>
    </div>
<?php
    //footer
    include_once('includes/footer.php')
?>