<?php

declare(strict_types=1);

namespace App\Test;

use App\Post;
use PHPUnit\Framework\TestCase;

final class PostTest extends TestCase
{
    /**
     * @test
     */
    public function sample()
    {
        $actual = (new Post())->func();
        $this->assertSame(true, $actual);
    }
}
