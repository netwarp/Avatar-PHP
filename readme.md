# Avatar.php

![avatar](avatar.png)

Generate a random avatar in PHP with the library GD

![avatar](examples/0.png)
![avatar](examples/1.png)
![avatar](examples/2.png)
![avatar](examples/3.png)
![avatar](examples/4.png)
![avatar](examples/5.png)
![avatar](examples/6.png)
![avatar](examples/7.png)

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