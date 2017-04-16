<?php
$output = shell_exec('eval `ssh-agent -s` && ssh-add ~scsciru1/.ssh/github && cd ~scsciru1/www/ && git add . && git commit -m "from link" && git push origin master');
echo "<pre>$output</pre>";
?>

Сайт выложен на Git
