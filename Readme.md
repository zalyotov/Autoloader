# Autoloader for PHP Classes / Namespaces
Необходимо заменить название папки и аругмента из Autoloader.php с namespacePathName на свое имя.

```sh
$ast = new AutoLoader("YourFolderName", realpath(dirname(__FILE__)));
```