<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCreditSeatRequest\subscriptionConfigs;

class CreateCreditSeatRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var subscriptionConfigs[]
     */
    public $subscriptionConfigs;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'clientToken' => 'ClientToken',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionConfigs' => 'SubscriptionConfigs',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptionConfigs)) {
            Model::validateArray($this->subscriptionConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->subscriptionConfigs) {
            if (\is_array($this->subscriptionConfigs)) {
                $res['SubscriptionConfigs'] = [];
                $n1 = 0;
                foreach ($this->subscriptionConfigs as $item1) {
                    $res['SubscriptionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SubscriptionConfigs'])) {
            if (!empty($map['SubscriptionConfigs'])) {
                $model->subscriptionConfigs = [];
                $n1 = 0;
                foreach ($map['SubscriptionConfigs'] as $item1) {
                    $model->subscriptionConfigs[$n1] = subscriptionConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
