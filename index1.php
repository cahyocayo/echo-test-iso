<?php
    include("tests/MessageMakeTest.php");
    $iswrite=false;
    if(isset($_POST['btn']))
    {
        $s=$_POST['mytext'];
        echo "nomor : " .$s;
        $test = new MessageMakeTest();
        $message = $test->test();
        $ip = "103.212.211.18";
        $port = "8581";
        echo "Request to server -- IP :" .$ip. "|| port : " .$port.  "|| message :" .$message;

        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
        socket_connect($socket, $ip, $port) or die("Could not connect toserver\n");
        socket_write($sock,$msg);
        $result = socket_read ($socket, 1024) or die("Could not read server response\n");
        echo "Reply From Server  :".$result;
        
        socket_close($socket);
        // if(isset($s))
        // {
        //     $sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create socket");
        //     $con=socket_connect($sock,$address,$port) or die("Cannot connect to socket");

        //     socket_write($sock,$d);
        //     socket_write($sock,"@");
        //     $write=socket_write($sock,$s);
        //     if($write)
        //         $iswrite=true;

        //     if($iswrite)
        //     {
        //         $read=socket_read($sock,1024);
        //         echo $read;
        //     }

        //     socket_close($sock);
        // }
    }
?>