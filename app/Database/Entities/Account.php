<?php
declare(strict_types=1);

namespace App\Database\Entities;

use App\Database\Schema\AccountSchema;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Account extends AbstractEntity
{
    use AccountSchema;

    /** string  */
    public const SUBSCRIPTION_TYPE_LIFETIME = 'lifetime';
    public const SUBSCRIPTION_TYPE_MONTHLY = 'monthly';

    /** string[] */
    public const SUBSCRIPTION_TYPE =[
        self::SUBSCRIPTION_TYPE_LIFETIME,
        self::SUBSCRIPTION_TYPE_MONTHLY
    ];

    /**
     * Get entity specific validation rules as an array.
     *
     * @return mixed[]
     */
    protected function doGetRules(): array
    {
        return [
            'accountNumber' => 'required|string',
            'subscriptionType' => 'required|in:' . \implode(',', self::SUBSCRIPTION_TYPE)
        ];
    }

    /**
     * Get array representation of children.
     *
     * @return mixed[]
     */
    protected function doToArray(): array
    {
        return [
            'account_number' => $this->getAccountNumber(),
            'id' => $this->getAccountId(),
            'subscription_type' => $this->getSubscriptionType()
        ];
    }

    /**
     * Get the id property for this entity
     *
     * @return string
     */
    protected function getIdProperty(): string
    {
        return 'accountId';
    }
}
