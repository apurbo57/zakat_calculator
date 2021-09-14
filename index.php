<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zakat Calculator</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Zakat Calculator</h1>
        </div>
        <?php 

                if (isset($_POST['calculate'])) {
                    
                    $num1    = $_POST['num1'];
                    $num2    = $_POST['num2'];
                    $num3    = $_POST['num3'];
                    $num4    = $_POST['num4'];
                    $num5    = $_POST['num5'];
                    $num6    = $_POST['num6'];
                    $num7    = $_POST['num7'];

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

            <form class="post-form" action="" method="post">
                <div class="form-group">
                    <label>Value of Gold (৳)</label>
                    <input type="number" name="num1" value="0" />
                </div>
                <div class="form-group">
                    <label>Value of Silver (৳)</label>
                    <input type="number" name="num2" value="0" />
                </div>
                <div class="form-group">
                    <label>In hand and in bank accounts</label>
                    <input type="number" name="num3" value="0" />
                </div>
                <div class="form-group">
                    <label>Deposited for ( e.g. Hajj )</label>
                    <input type="number" name="num4" value="0" />
                </div>
                <div class="form-group">
                    <label>Given out in loans</label>
                    <input type="number" name="num5" value="0" />
                </div>
                <div class="form-group">
                    <label>Business investments, shares, saving certificates, pensions</label>
                    <input type="number" name="num6" value="0" />
                </div>
                <div class="form-group">
                    <label>Deposited for ( e.g. Hajj )</label>
                    <input type="number" name="num7" value="0" />
                </div>
                <input class="submit" name="calculate" type="submit" value="Calculate"  />
                <input class="submit" name="reset" type="reset" value="Reset"  />
            </form>
        </div>
    </div>
</body>
</html>
