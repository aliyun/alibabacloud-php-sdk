<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RenewCreditSeatRequest extends Model
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
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
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

        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
