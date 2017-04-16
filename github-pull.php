<?php
$output = shell_exec('eval `ssh-agent -s` && ssh-add ~scsciru1/.ssh/github && cd ~scsciru1/www/ && git pull');
echo "<pre>$output</pre>";
?>

Сайт обновлен
