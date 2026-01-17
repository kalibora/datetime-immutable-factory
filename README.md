# datetime-immutable-factory

Enforce DateTimeInterface to DateTimeImmutable.

## Status

⚠️ **This library is no longer necessary on PHP 8.0 or later.**

PHP 8.0 introduced `DateTimeImmutable::createFromInterface()`, which provides the same functionality as this library.

If you are using PHP 8.0 or newer, please use the built-in method instead:

https://www.php.net/manual/en/datetimeimmutable.createfrominterface.php

## Usage

```php
$immutable1 = DateTimeImmutableFactory::create(new \DateTime());
$immutable2 = DateTimeImmutableFactory::create(new \DateTimeImmutable());

function addOneDay(\DateTimeInterface $date) : \DateTimeInterface
{
    // Call to an undefined method DateTimeInterface::modify()
    // $date->modify();

    return DateTimeImmutableFactory::create($date)->modify('+1 day');
}
```
