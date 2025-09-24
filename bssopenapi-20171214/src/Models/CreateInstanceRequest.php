<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest\parameter;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $logistics;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var parameter[]
     */
    public $parameter;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $renewPeriod;

    /**
     * @var string
     */
    public $renewalStatus;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'logistics' => 'Logistics',
        'ownerId' => 'OwnerId',
        'parameter' => 'Parameter',
        'period' => 'Period',
        'pricingCycle' => 'PricingCycle',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'renewPeriod' => 'RenewPeriod',
        'renewalStatus' => 'RenewalStatus',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        if (\is_array($this->parameter)) {
            Model::validateArray($this->parameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->logistics) {
            $res['Logistics'] = $this->logistics;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parameter) {
            if (\is_array($this->parameter)) {
                $res['Parameter'] = [];
                $n1 = 0;
                foreach ($this->parameter as $item1) {
                    $res['Parameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->renewPeriod) {
            $res['RenewPeriod'] = $this->renewPeriod;
        }

        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Logistics'])) {
            $model->logistics = $map['Logistics'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Parameter'])) {
            if (!empty($map['Parameter'])) {
                $model->parameter = [];
                $n1 = 0;
                foreach ($map['Parameter'] as $item1) {
                    $model->parameter[$n1] = parameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RenewPeriod'])) {
            $model->renewPeriod = $map['RenewPeriod'];
        }

        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
