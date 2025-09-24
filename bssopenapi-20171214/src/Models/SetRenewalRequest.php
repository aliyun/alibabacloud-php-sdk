<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class SetRenewalRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIDs;

    /**
     * @var int
     */
    public $ownerId;

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
    public $renewalPeriod;

    /**
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @var string
     */
    public $renewalStatus;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceIDs' => 'InstanceIDs',
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'renewalPeriod' => 'RenewalPeriod',
        'renewalPeriodUnit' => 'RenewalPeriodUnit',
        'renewalStatus' => 'RenewalStatus',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIDs) {
            $res['InstanceIDs'] = $this->instanceIDs;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->renewalPeriod) {
            $res['RenewalPeriod'] = $this->renewalPeriod;
        }

        if (null !== $this->renewalPeriodUnit) {
            $res['RenewalPeriodUnit'] = $this->renewalPeriodUnit;
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
        if (isset($map['InstanceIDs'])) {
            $model->instanceIDs = $map['InstanceIDs'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RenewalPeriod'])) {
            $model->renewalPeriod = $map['RenewalPeriod'];
        }

        if (isset($map['RenewalPeriodUnit'])) {
            $model->renewalPeriodUnit = $map['RenewalPeriodUnit'];
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
