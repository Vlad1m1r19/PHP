
<style>
    <?php   include("css/bootstrap.min.css") ?>
    <?php   include("css/apexcharts.css") ?>
    <?php   include("css/tooplate-mini-finance.css") ?>
    </style>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>    

<body>
<div class="table-responsive">
        <table class="account-table table">
            <thead>
                 <tr>
                     <th><a class='btn btn-dark' href='create.php?id=$row[id]'>Vytvor</a></th>

                    <th scope="col">ID</th>

                   <th scope="col">Dátum</th>

                    <th scope="col">Čas</th>

                    <th scope="col">Popis</th>

                    <th scope="col">Typ_platby</th>

                     <th scope="col">Počet</th>

                     <th scope="col">Zostatok</th>

                    <th scope="col">Status</th>

                </tr>
            </thead>

             <tbody>
                                            
                <?php
                    include('connection.php');
                    $sql = "select * from wallet";
                    $result = $conn->query($sql);
                    if(!$result){
                        die("Invalid query!");
                        }
                    while($wallet=$result->fetch_assoc()){
                        echo "
                        <tr>
                        <td >
                                                  
                        <a class='btn btn-success' href='edit.php?id=$wallet[id]'>Upraviť</a>
                        <a class='btn btn-danger' href='delete.php?id=$wallet[id]'>Vymazať</a>
                                          
                        </td>
                        <td > $wallet[id]</td>
                        <td > $wallet[datum]</td>
                        <td > $wallet[cas]</td>
                        <td > $wallet[popis]</td>
                        <td > $wallet[typ_platby] </td>
                        <td > $wallet[pocet]</td>
                        <td >$wallet[zostatok]</td>
                        <td >$wallet[status]</td>
                        </tr>
                        ";
                        }?>
            </tbody>
        </table>
</div>

