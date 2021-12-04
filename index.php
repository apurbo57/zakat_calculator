<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zakat Calculator</title>
  
  <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Zakat Calculator</h1>
        </div>
        <?php 
                if (isset($_POST['reset'])) {
                    session_destroy();
                    header('location:index.php');
                }
                if (isset($_POST['calculate'])) {
                    
                    session_destroy();

                    $num1    = $_POST['num1'];
                    $num2    = $_POST['num2'];
                    $num3    = $_POST['num3'];
                    $num4    = $_POST['num4'];
                    $num5    = $_POST['num5'];
                    $num6    = $_POST['num6'];
                    $num7    = $_POST['num7'];

                    if(empty($_SESSION['num1'])){
                            $_SESSION['num1'] = $num1;

                        }
                    if(empty($_SESSION['num2'])){
                            $_SESSION['num2'] = $num2;

                        }
                    if(empty($_SESSION['num3'])){
                            $_SESSION['num3'] = $num3;

                        }
                    if(empty($_SESSION['num4'])){
                            $_SESSION['num4'] = $num4;

                        }
                    if(empty($_SESSION['num5'])){
                            $_SESSION['num5'] = $num5;

                        }
                    if(empty($_SESSION['num6'])){
                            $_SESSION['num6'] = $num6;

                        }
                    if(empty($_SESSION['num7'])){
                            $_SESSION['num7'] = $num7;

                        }

                    if ($num1 == "" || $num2 == "" || $num3 == "" || $num4 == "" || $num5 == "" || $num6 == "" || $num7 == "" ) {?>
                        <div id="menu">
                            <ul>
                                <li>
                                    <a style="color:red;">Feild Must Not be empty!</a>
                                </li>
                            </ul>
                        </div>
                <?php    }else{
                        $total_num = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 ;?>

                        <div id="menu">
                            <ul>
                                <li>
                                    <a style="color:#3aff3a;">Nisab (updated <?php echo date('Y-m-d'); ?> BDT ) =  <?php echo $total_num/100*2.5; ?></a>
                                </li>
                                <li>
                                    <button style="cursor: pointer; width: 70px;" onClick="window.print()">Print</button>
                                </li>
                            </ul>
                        </div>

                 <?php    }
                }

             ?>
        <!-- <div id="menu">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
        </div> -->
        <div id="main-content">

            <form class="post-form shadow-lg" action="" method="post">
                <div class="form-group">
                    <label>Value of Gold (৳)</label>
                    <input class="form-control" type="number" name="num1" value="<?php if(empty($_SESSION['num1'])){
                        echo '0';
                    }else{
                        echo $_SESSION['num1'];
                    } ?>" />
                </div>
                <div class="form-group">
                    <label>Value of Silver (৳)</label>
                    <input class="form-control" type="number" name="num2" value="<?php if(empty($_SESSION['num2'])){
                        echo '0';
                    }else{
                        echo $_SESSION['num2'];
                    } ?>" />
                </div>
                <div class="form-group">
                    <label>In hand and in bank accounts</label>
                    <input class="form-control" type="number" name="num3" value="<?php if(empty($_SESSION['num3'])){
                        echo '0';
                    }else{
                        echo $_SESSION['num3'];
                    } ?>" />
                </div>
                <div class="form-group">
                    <label>Deposited for ( e.g. Hajj )</label>
                    <input class="form-control" type="number" name="num4" value="<?php if(empty($_SESSION['num4'])){
                            echo '0';
                        }else{
                            echo $_SESSION['num4'];
                        } ?>" />
                </div>
                <div class="form-group">
                    <label>Given out in loans</label>
                    <input class="form-control" type="number" name="num5" value="<?php if(empty($_SESSION['num5'])){
                            echo '0';
                        }else{
                            echo $_SESSION['num5'];
                        } ?>" />
                </div>
                <div class="form-group">
                    <label>Business investments, shares, saving certificates, pensions</label>
                    <input class="form-control" type="number" name="num6" value="<?php if(empty($_SESSION['num6'])){
                            echo '0';
                        }else{
                            echo $_SESSION['num6'];
                        } ?>" />
                </div>
                <div class="form-group">
                    <label>Deposited for ( e.g. Hajj )</label>
                    <input class="form-control" type="number" name="num7" value="<?php if(empty($_SESSION['num7'])){
                            echo '0';
                        }else{
                            echo $_SESSION['num7'];
                        } ?>" />
                </div>
                <input class="btn btn-success" name="calculate" type="submit" value="Calculate"  />
                <input class="btn btn-danger" name="reset" type="submit" value="Reset"  />
            </form>
        </div>
    </div>
    <p style="text-align:center; margin-top: 100px;">The app is created by <a href="https://www.facebook.com/APURBO.STAR/" style="color:blue; text-decoration:none;">APURBO</a></p>
</body>
</html>
