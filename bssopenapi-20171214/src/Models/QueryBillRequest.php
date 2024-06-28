<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryBillRequest extends Model
{
    /**
     * @description The ID of the member.
     *
     * @example 123
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
     * @description Specifies whether to display local currency information in bills. The parameter will be discontinued.
     *
     * @example false
     *
     * @var bool
     */
    public $isDisplayLocalCurrency;

    /**
     * @description Specifies whether to filter out a bill whose pretax gross amount is 0. By default, a bill whose pretax gross amount is 0 is not filtered out. Valid values:
     *
     *   true: filters out a bill whose pretax gross amount is 0.
     *   false: does not filter out a bill whose pretax gross amount is 0.
     *
     * @example true
     *
     * @var bool
     */
    public $isHideZeroCharge;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 20. Maximum value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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
     *   Subscription
     *   PayAsYouGo
     *
     **
     *
     ****This parameter must be used together with the ProductCode parameter.
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The type of the bill. Valid values:
     *
     *   SubscriptionOrder
     *   PayAsYouGoBill
     *   Refund
     *   Adjustment
     *
     * @example SubscriptionOrder
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'billOwnerId'            => 'BillOwnerId',
        'billingCycle'           => 'BillingCycle',
        'isDisplayLocalCurrency' => 'IsDisplayLocalCurrency',
        'isHideZeroCharge'       => 'IsHideZeroCharge',
        'ownerId'                => 'OwnerId',
        'pageNum'                => 'PageNum',
        'pageSize'               => 'PageSize',
        'productCode'            => 'ProductCode',
        'productType'            => 'ProductType',
        'subscriptionType'       => 'SubscriptionType',
        'type'                   => 'Type',
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
        if (null !== $this->isDisplayLocalCurrency) {
            $res['IsDisplayLocalCurrency'] = $this->isDisplayLocalCurrency;
        }
        if (null !== $this->isHideZeroCharge) {
            $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBillRequest
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
        if (isset($map['IsDisplayLocalCurrency'])) {
            $model->isDisplayLocalCurrency = $map['IsDisplayLocalCurrency'];
        }
        if (isset($map['IsHideZeroCharge'])) {
            $model->isHideZeroCharge = $map['IsHideZeroCharge'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
