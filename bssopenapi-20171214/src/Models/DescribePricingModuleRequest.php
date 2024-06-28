<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribePricingModuleRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The service code. You can query the service code by calling the **QueryProductList** operation.
     *
     * This parameter is required.
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service. You can query the service type by calling the **QueryProductList** operation.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * This parameter is required.
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'ownerId'          => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return DescribePricingModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
