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
            <label for="file2"><h2>load file</h2></label>
            <input id="file2" name="file2" type="file">
            <p><input type="submit"></p>
        </form>
        
        <?php
        if(isset($_FILES['file']))
            {
            foreach ($_FILES as $k=>$v){                
                if($v['error']==0)
                    {            
                    move_uploaded_file($v['tmp_name'],'img/'.$v['name']); 
                    echo '<img src="/homework/img/'.$v['name'].'" alt="'.$k.'">';                    
                    }  
                }
            }
        ?>
    </body>
</html>
