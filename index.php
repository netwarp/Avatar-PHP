<?php

require_once('Avatar.php');

$avatar = new Avatar( md5(time()), 7, 200);
$avatar->save('avatar.png');

?>

<img src="<?= $avatar->base64() ?>" alt="">




