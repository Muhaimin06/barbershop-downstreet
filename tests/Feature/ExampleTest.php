<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_shows_downstreet_information_and_unconfirmed_details(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Your Style.')
            ->assertSee('0852-3880-8622')
            ->assertSee('4,8 / 5')
            ->assertSee('Harga dapat ditanyakan langsung melalui WhatsApp.')
            ->assertSee('Akun Instagram belum dikonfirmasi.')
            ->assertSee('Foto di bawah adalah ilustrasi, bukan foto asli Barbershop Downstreet.');
    }
}
