<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->faker = (object) [
            'name' => 'Colin',
            'email' => 'colin@example.com',
        ];
        $password = 'example';

        $this->browse(function (Browser $browser) use ($password) {
            $browser->visit('/')
                    ->click('@register')
                    ->type('name', $this->faker->name)
                    ->type('email', $this->faker->email)
                    ->type('password',$password)
                    ->type('password_confirmation',$password)
                    ->click('@submit')
                    ->assertTitle("Laravel");
             ;
        });
    }
}
