<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySettleBillRequest extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example 2018-07
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDisplayLocalCurrency;

    /**
     * @example true
     *
     * @var bool
     */
    public $isHideZeroCharge;

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
     * @var int
     */
    public $ownerId;

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
    public $productType;

    /**
     * @example 12233
     *
     * @var string
     */
    public $recordID;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
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
