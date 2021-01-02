<?php

declare(strict_types=1);

namespace Tests\Unit\Exchanges;

use App\Teams\Team;
use App\Exchanges\Exchange;
use Tests\TestCase;

class ExchangeTest extends TestCase {

    /** @test **/
    public function itWillCreateAnExchange(): void
    {
        $teamWithExchange = Team::factory()
            ->has(Exchange::factory())
            ->make();

        $this->assertTrue($teamWithExchange->ownsExchange);
    }
}
