<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ( $_POST['payload'] ) {
  shell_exec( 'cd cd ~scsciru1/www/ && git pull origin master' );
}
?>hi
