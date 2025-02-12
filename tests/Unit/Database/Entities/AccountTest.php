<?php
declare(strict_types=1);

namespace Tests\App\Unit\Database\Entities;

use App\Database\Entities\Account;
use Tests\App\Tools\TestCases\DoctrineAnnotationsTestCase;

/**
 * @covers \App\Database\Entities\Account
 */
final class AccountTest extends DoctrineAnnotationsTestCase
{
    /**
     * Test assert id property.
     *
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testAssertIdProperty(): void
    {
        $this->assertIdProperty(Account::class, 'accountId');
    }

    /**
     ** Test entity do get rules.
     *
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testDoGetRules(): void
    {
        $this->assertDoGetRules(Account::class, [
            'accountNumber' => 'required|string',
            'subscriptionType' => 'required|in:'  . \implode(',', Account::SUBSCRIPTION_TYPES),
            'user' => 'required|instance_of:App\Database\Entities\User'
        ]);
    }

    /**
     * Test assert id property.
     *
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testDoToArray(): void
    {
        $this->assertDoToArray(Account::class, [
            'account_number',
            'id',
            'subscription_type',
            'user'
        ]);
    }
}
