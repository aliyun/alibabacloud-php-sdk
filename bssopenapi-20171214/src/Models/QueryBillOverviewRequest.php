<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryBillOverviewRequest extends Model
{
    /**
     * @description The ID of the member. If you specify a value for this parameter, you can query the bills of the specified member. If you leave this parameter empty, the bills of the current account are queried by default.
     *
     * @example 1234
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The billing cycle, in the YYYY-MM format.
     *
     * This parameter is required.
     * @example 2018-07
     *
     * @var string
     */
    public $billingCycle;

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
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method
     *   PayAsYouGo: the pay-as-you-go billing method
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'billOwnerId'      => 'BillOwnerId',
        'billingCycle'     => 'BillingCycle',
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
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
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
     * @return QueryBillOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
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
