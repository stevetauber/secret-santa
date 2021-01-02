<?php

declare(strict_types=1);

namespace Tests\Unit\Exchanges;

use App\Teams\Actions\CreateTeam;
use App\Teams\Team;
use App\Exchanges\Exchange;
use App\Users\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExchangeTest extends TestCase {

    use WithFaker;

    /** @test **/
    public function itWillCreateAnExchange(): void
    {
        $user = User::factory()->create();
        $exchange = Exchange::factory()->make();

        $createTeamAction = new CreateTeam;
        $team = $createTeamAction->create($user, ['name' => $this->faker->catchPhrase]);
        $team->exchanges()->save($exchange);

        $this->assertTrue($team->runsAnExchange());
    }
}
