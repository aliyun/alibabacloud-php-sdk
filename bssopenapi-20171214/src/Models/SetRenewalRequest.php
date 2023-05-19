<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetRenewalRequest extends Model
{
    /**
     * @description The ID of the instance. You can enable auto-renewal for up to 100 subscription instances at a time. Separate multiple instance IDs with commas (,).
     *
     * @example rm-askjdhaskfjh
     *
     * @var string
     */
    public $instanceIDs;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The auto-renewal period. Valid values:
     *
     *   1
     *   2
     *   3
     *   6
     *   12
     *
     * >  This parameter is required if the RenewalStatus parameter is set to AutoRenewal.
     * @example 1
     *
     * @var int
     */
    public $renewalPeriod;

    /**
     * @description The unit of the auto-renewal period. Valid values:
     *
     *   M: months
     *   Y: years
     *
     * >  This parameter is required if the RenewalStatus parameter is set to AutoRenewal.
     * @example M
     *
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @description The status of renewal. Valid values:
     *
     *   AutoRenewal: The instance is automatically renewed.
     *   ManualRenewal: The instance is manually renewed.
     *   NotRenewal: The instance is not renewed.
     *
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceIDs'       => 'InstanceIDs',
        'ownerId'           => 'OwnerId',
        'productCode'       => 'ProductCode',
        'productType'       => 'ProductType',
        'renewalPeriod'     => 'RenewalPeriod',
        'renewalPeriodUnit' => 'RenewalPeriodUnit',
        'renewalStatus'     => 'RenewalStatus',
        'subscriptionType'  => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetRenewalRequest
     */
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
