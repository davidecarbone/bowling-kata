<?php

namespace Bowling;

use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
	/** @test */
	public function it_works()
	{
        new Game();
	}
}
