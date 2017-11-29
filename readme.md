# Avatar.php

![avatar](avatar.png)

Generate a random avatar in PHP with the library GD

![avatar](example/0.png)
![avatar](example/1.png)
![avatar](example/2.png)
![avatar](example/3.png)
![avatar](example/4.png)
![avatar](example/5.png)
![avatar](example/6.png)
![avatar](example/7.png)

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