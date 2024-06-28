<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeProductAmortizedCostByAmortizationPeriodRequest extends Model
{
    /**
     * @description The instance ID that is used to filter bills. You can specify multiple instance IDs to query bills of multiple instances. If you leave this parameter empty, the bills of all instances are queried by default. You can specify a maximum of 10 instance IDs.
     *
     * @var string[]
     */
    public $billOwnerIdList;

    /**
     * @description The ID of the member that needs to settle the bill. The member ID is used to filter bills. If you specify a value for this parameter, you can query the bills of the specified member. If you leave this parameter empty, the bills of the current account and all members of the current account are queried by default. You can specify a maximum of 10 IDs.
     *
     * @var string[]
     */
    public $billUserIdList;

    /**
     * @description The allocation month. Format: YYYY-MM.
     *
     * This parameter is required.
     * @example 2022-10
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The billing cycle that is used to filter bills. You can specify a maximum of 10 billing cycles.
     *
     * @var string[]
     */
    public $consumePeriodFilter;

    /**
     * @description The code of the cost center.
     *
     * @example 123#
     *
     * @var string
     */
    public $costUnitCode;

    /**
     * @description The maximum number of entries to return. Default value: 20. Maximum value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The position from which the query starts. The parameter must be left empty or set to the value of the NextToken parameter returned from the last call. Otherwise, an error is returned. If this parameter is left empty, data is queried from the beginning.
     *
     * @example CAESEgoQCg4KCmdtdF9jcmVhdGUEARgBIkgKCQBwhGmPcAEAAAo7AzYAAAAxTDgwMDcxMjg3ZDJhNmM3ZDguTDgwMDAwMDAwMDAwMzE1MTIuTDgwMDcyZDMyZTJkYzg3N2U
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The code of the service. You can obtain the value of this parameter by calling the QueryProductList operation or the DescribeResourcePackageProduct operation.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The specific service resource.
     *
     * @example rds
     *
     * @var string
     */
    public $productDetail;

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
        'billOwnerIdList'     => 'BillOwnerIdList',
        'billUserIdList'      => 'BillUserIdList',
        'billingCycle'        => 'BillingCycle',
        'consumePeriodFilter' => 'ConsumePeriodFilter',
        'costUnitCode'        => 'CostUnitCode',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'productCode'         => 'ProductCode',
        'productDetail'       => 'ProductDetail',
        'subscriptionType'    => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billOwnerIdList) {
            $res['BillOwnerIdList'] = $this->billOwnerIdList;
        }
        if (null !== $this->billUserIdList) {
            $res['BillUserIdList'] = $this->billUserIdList;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->consumePeriodFilter) {
            $res['ConsumePeriodFilter'] = $this->consumePeriodFilter;
        }
        if (null !== $this->costUnitCode) {
            $res['CostUnitCode'] = $this->costUnitCode;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductAmortizedCostByAmortizationPeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerIdList'])) {
            if (!empty($map['BillOwnerIdList'])) {
                $model->billOwnerIdList = $map['BillOwnerIdList'];
            }
        }
        if (isset($map['BillUserIdList'])) {
            if (!empty($map['BillUserIdList'])) {
                $model->billUserIdList = $map['BillUserIdList'];
            }
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['ConsumePeriodFilter'])) {
            if (!empty($map['ConsumePeriodFilter'])) {
                $model->consumePeriodFilter = $map['ConsumePeriodFilter'];
            }
        }
        if (isset($map['CostUnitCode'])) {
            $model->costUnitCode = $map['CostUnitCode'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
