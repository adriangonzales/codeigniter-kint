codeigniter-kint
================

A modification to the [Kint debugging library](https://github.com/raveren/kint) for use in CodeIgniter. Currently based on v32.

Made a few modifications to allow easy use in CodeIgniter. Simply load the library:

```php
$this->load->library('kint');
```
And if you wish to use Kint in daily use, add 'kint' to autoload config file:

```php
$autoload['libraries'] = array('kint');
```

And then use Kint as normal:

```php
Kint::dump($some_var);
```

or, you can use it like you're used to in CI:

```php
$this->kint->dump($some_var);
```


Have fun debugging.
