<?php 
        if(isset($_POST['submit'])){

            $name = $_POST['nama'] ;
            $email = $_POST['email'];
            $NoHp = $_POST['NoHp'];
            $message = $_POST['message'];
            $no_wa = $_POST['nowa'];
            
            header("location:https://api.whatsap.com/send?phone=$no_wa&text=Nama:%20$name
            %20%0DEmail:%20$email%20%0DTlp:%20$NoHp%20%0DPesan:%20$message");
        }else{

            echo "
                    <script>
                    windows.location=history.go(-1);
                    </script>
            
            ";
        }





?>