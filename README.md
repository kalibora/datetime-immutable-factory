# datetime-immutable-factory

Enforce DateTimeInterface to DateTimeImmutable.

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
