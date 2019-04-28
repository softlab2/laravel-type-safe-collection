<?php

namespace Webparking\TypeSafeCollection\Tests\Feature;

use Webparking\TypeSafeCollection\Tests\Data\User;
use Webparking\TypeSafeCollection\Tests\Data\UserCollection;
use Webparking\TypeSafeCollection\Tests\TestCase;

class AllTest extends TestCase
{
    public function testCorrect(): void
    {
        $collection = new UserCollection([
            new User(),
        ]);

        $this->assertIsArray($collection->all());
    }
}
