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
    public function getTitle()
    {
        $actual = (new Post())->getTitle();
        $this->assertSame('初めての投稿', $actual);
    }
}
