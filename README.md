codeigniter-kint
================

A modification to the [Kint debugging library](https://github.com/raveren/kint) for use in CodeIgniter. Currently based on v32.

Made a few modifications to allow easy use in CodeIgniter. Simply load the library:

```php
// linux or windows is ok
$this->load->library('Kint/kint');
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
