<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySettleBillRequest extends Model
{
    /**
     * @description The ID of the member. If you specify a value for this parameter, you can query the bills of the specified member. If you leave this parameter empty, the bills of the current account are queried by default.
     *
     * @example 123
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The billing cycle, in the YYYY-MM format.
     *
     * @example 2018-07
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description Specifies whether to display local currency information in bills.
     *
     * @example false
     *
     * @var bool
     */
    public $isDisplayLocalCurrency;

    /**
     * @description Specifies whether to filter out a bill whose pretax gross amount is 0. By default, a bill whose pretax gross amount is 0 is not filtered out.
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
     * @description The maximum number of entries to return. Default value: 20. Maximum value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The starting position of the query. If this parameter is left empty, the query starts from the beginning.
     *
     * @example CAESEgoQCg4KCmdtdF9jcmVhdGUEARgBIkgKCQBwhGmPcAEAAAo7AzYAAAAxTDgwMDcxMjg3ZDJhNmM3ZDguTDgwMDAwMDAwMDAwMzE1MTIuTDgwMDcyZDMyZTJkYzg3N2U
     *
     * @var string
     */
    public $nextToken;

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
     * @description The ID of the bill or order.
     *
     * @example 12233
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method
     *   PayAsYouGo: the pay-as-you-go billing method
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
     *   SubscriptionOrder: subscription order
     *   PayAsYouGoBill: pay-as-you-go bill
     *   Refund: refund
     *   Adjustment: reconciliation
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
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'ownerId'                => 'OwnerId',
        'productCode'            => 'ProductCode',
        'productType'            => 'ProductType',
        'recordID'               => 'RecordID',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
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
     * @return QuerySettleBillRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
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
