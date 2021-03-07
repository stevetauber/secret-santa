<?php

namespace Tests\Feature\Exchanges;

use Illuminate\Testing\TestView;
use Tests\TestCase;

class ExchangeTest extends TestCase
{
    /** @test **/
    public function itWillListExchanges()
    {
        $view = $this->view('exchanges.show');

        $view->assertSee('Your exchanges');
    }
}
