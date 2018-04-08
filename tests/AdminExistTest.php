<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminExistTest extends WebTestCase
{
    /**
     * @dataProvider urlExistsData
     */
    public function testUrlExists(string $url): void
    {
        $client = static::createClient();
        $client->request(
            'GET',
            $url
        );

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function urlExistsData(): array
    {
        return [
          ['admin/app/service/list'],
          ['admin/app/service/create']
        ];
    }
}