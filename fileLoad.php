<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="text-align: center">       
        <form method="post" enctype="multipart/form-data">
           <label for="file"><h2>load image</h2></label>
            <input id="file" name="file" type="file">
            <p><input type="submit"></p>
        </form>
        
        <?php
        if(isset($_FILES['file']))
            {
            if($_FILES['file']['error']==0)
                {            
                move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$_FILES['file']['name']);            
                }        
            }
        ?>
    </body>
</html>
