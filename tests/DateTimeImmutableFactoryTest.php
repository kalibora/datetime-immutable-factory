<?php

namespace Kalibora\DateTimeImmutableFactory;

use PHPUnit\Framework\TestCase;

class DateTimeImmutableFactoryTest extends TestCase
{
    public function testFromMutable() : void
    {
        $datetime = DateTimeImmutableFactory::create(new \DateTime());

        $this->assertInstanceOf(\DateTimeImmutable::class, $datetime);
    }

    public function testFromImmutable() : void
    {
        $datetime = DateTimeImmutableFactory::create(new \DateTimeImmutable());

        $this->assertInstanceOf(\DateTimeImmutable::class, $datetime);
    }

    public function testModify() : void
    {
        $datetime = $this->addOneDay(new \DateTime());

        $this->assertInstanceOf(\DateTimeInterface::class, $datetime);
    }

    private function addOneDay(\DateTimeInterface $date) : \DateTimeInterface
    {
        return DateTimeImmutableFactory::create($date)->modify('+1 day');
    }
}
