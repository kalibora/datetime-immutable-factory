<?php

namespace Kalibora\DateTimeImmutableFactory;

class DateTimeImmutableFactory
{
    public static function create(\DateTimeInterface $datetime) : \DateTimeImmutable
    {
        if ($datetime instanceof \DateTimeImmutable) {
            return $datetime;
        }

        if ($datetime instanceof \DateTime) {
            return \DateTimeImmutable::createFromMutable($datetime);
        }

        throw new \Exception('Unknown class ' . get_class($datetime)); /** @phpstan-ignore-line */
    }
}
