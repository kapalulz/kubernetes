<?php
$ip_server = $_SERVER['SERVER_ADDR'];

echo "<h1><font color=red>Hello there</h1><br>";
echo "Server IP Address is<font color=yellow>: $ip_server", "<br><p>";
echo "<font color=red> Made by Oleksandr Kashuba";

?>

<script LANGUAGE="JavaScript">

        var sizes = new Array(0,1,2,4,8,10,12)
        sizes.pos = 0
        let d = new Date();
    //alert("Today's date is " + d);
    document.getElementById('output').d

        function Elastic() {

        var el = document.all.elastic
        if (null == el.direction)el.direction = 1
        else if ((sizes.pos > sizes.length - 2) || (0 == sizes.pos))
        el.direction *= -1
        el.style.letterSpacing = sizes[sizes.pos += el.direction]
        setTimeout('Elastic()', 80)
}
</script>




<html>

<h3><CENTER> <p style="color:yellow"> Docker Container </p></h2> <font color="purple">
        <CENTER>                                                --------------------------------------------------------- </font> <br>


<body style="background-color:black;"> <CENTER>
   <img src="https://nickjanetakis.com/assets/blog/cards/differences-between-a-dockerfile-docker-image-and-docker-container-001320c81dd8d2989df10d0bec36341fd6a94b043f6f9de1c26ee79eaf16e566.jpg" alt="Docker" width="500" height="377" >
</body>


<body style="background-color:black" onLoad=Elastic()>
<CENTER>
<background color="black">
<font color="yellow"><H1 ID="elastic" ALIGN="CENTER" ID="output">Hello there! </p> </H1>
<script> Elastic() </script>
</body>

</html>
