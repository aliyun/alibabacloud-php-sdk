<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeProductAmortizedCostByConsumePeriodRequest extends Model
{
    /**
     * @var string[]
     */
    public $amortizationPeriodFilter;

    /**
     * @var string[]
     */
    public $billOwnerIdList;

    /**
     * @var string[]
     */
    public $billUserIdList;

    /**
     * @description This parameter is required.
     *
     * @example 2022-10
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example 123#
     *
     * @var string
     */
    public $costUnitCode;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example CAESEgoQCg4KCmdtdF9jcmVhdGUEARgBIkgKCQBwhGmPcAEAAAo7AzYAAAAxTDgwMDcxMjg3ZDJhNmM3ZDguTDgwMDAwMDAwMDAwMzE1MTIuTDgwMDcyZDMyZTJkYzg3N2U
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productDetail;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'amortizationPeriodFilter' => 'AmortizationPeriodFilter',
        'billOwnerIdList'          => 'BillOwnerIdList',
        'billUserIdList'           => 'BillUserIdList',
        'billingCycle'             => 'BillingCycle',
        'costUnitCode'             => 'CostUnitCode',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'productCode'              => 'ProductCode',
        'productDetail'            => 'ProductDetail',
        'subscriptionType'         => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amortizationPeriodFilter) {
            $res['AmortizationPeriodFilter'] = $this->amortizationPeriodFilter;
        }
        if (null !== $this->billOwnerIdList) {
            $res['BillOwnerIdList'] = $this->billOwnerIdList;
        }
        if (null !== $this->billUserIdList) {
            $res['BillUserIdList'] = $this->billUserIdList;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
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
     * @return DescribeProductAmortizedCostByConsumePeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AmortizationPeriodFilter'])) {
            if (!empty($map['AmortizationPeriodFilter'])) {
                $model->amortizationPeriodFilter = $map['AmortizationPeriodFilter'];
            }
        }
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
