<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ConvertChargeTypeRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-kasjgfjshgf
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription duration. Unit: months. This parameter is required if you switch the billing method to subscription. Valid values:
     *
     *   1 to 9
     *   12
     *   24
     *   36
     *
     * @example 6
     *
     * @var int
     */
    public $period;

    /**
     * @description The code of the service to which the instance belongs.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service to which the instance belongs.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * >  After the call is successful, the billing method of the instance is switched.
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'ownerId'          => 'OwnerId',
        'period'           => 'Period',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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

    /**
     * @param array $map
     *
     * @return ConvertChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
