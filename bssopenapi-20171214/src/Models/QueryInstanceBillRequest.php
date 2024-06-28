<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceBillRequest extends Model
{
    /**
     * @description The ID of the member. If you specify a value for this parameter, you can query the bills of the specified member. If you leave this parameter empty, the bills of the current account are queried by default.
     *
     * @example 122
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The billing cycle. Format: YYYY-MM.
     *
     * This parameter is required.
     * @example 2020-03
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The billing date. This parameter is required only if the **Granularity** parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example 2020-03-03
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The granularity at which bills are queried. Valid values:
     *
     *   MONTHLY: queries bills by month. The data queried is consistent with the data that is displayed for the specified billing cycle on the Billing Details tab of the Bill Details page in User Center.
     *   DAILY: queries bills by day. The data queried is consistent with the data that is displayed for the specified day on the Billing Details tab of the Bill Details page in User Center.
     *
     * You must set the **BillingDate** parameter before you can set the Granularity parameter to DAILY.
     * @example MONTHLY
     *
     * @var string
     */
    public $granularity;

    /**
     * @description Specifies whether to query data by billable item. Valid values:
     *
     *   false: does not query data by billable item. The data queried is consistent with the data that is displayed for the specified instance on the Billing Details tab of the Bill Details page in User Center.
     *   true: queries data by billable item. The data queried is consistent with the data that is displayed for the specified billable item on the Billing Details tab of the Bill Details page in User Center.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $isBillingItem;

    /**
     * @description Specifies whether to filter out a bill whose pretax gross amount and pretax amount are 0. Default value: false.******** Valid values:
     *
     *   false: does not filter the bill.
     *   true: filters the bill.
     *
     * @example false
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
     * @description The type of the service. This parameter is required if the ProductCode parameter is set to the service code of Alibaba Cloud Marketplace.
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
     **
     *
     ****This parameter must be used together with the **ProductCode** parameter.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'billOwnerId'      => 'BillOwnerId',
        'billingCycle'     => 'BillingCycle',
        'billingDate'      => 'BillingDate',
        'granularity'      => 'Granularity',
        'isBillingItem'    => 'IsBillingItem',
        'isHideZeroCharge' => 'IsHideZeroCharge',
        'ownerId'          => 'OwnerId',
        'pageNum'          => 'PageNum',
        'pageSize'         => 'PageSize',
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
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->isBillingItem) {
            $res['IsBillingItem'] = $this->isBillingItem;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstanceBillRequest
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
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['IsBillingItem'])) {
            $model->isBillingItem = $map['IsBillingItem'];
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

        return $model;
    }
}
