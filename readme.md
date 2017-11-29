# Avatar.php

![avatar](avatar.png)

Generate a random avatar in PHP with the library GD

Generate and save


## Usage.

```php
$avatar = new Avatar($string, $block = 5, $size = 400);
```

Generate and save

```php
$avatar = new Avatar( 'string', 7, 400);
$avatar->save('avatar.png');
```

Generate and display

```php
<?php
$avatar = new Avatar( 'string', 7, 400);
$avatar->save('avatar.png');
?>

<img src="<?= $avatar->base64() ?>" alt="">
```