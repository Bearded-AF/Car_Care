<?php

namespace Tests\Unit;

use Tests\TestCase;




class OffersTest extends TestCase
{
    
    public function test_service()
    {

         $response = $this->get('/book_service')->assertStatus(302);

    }
}
