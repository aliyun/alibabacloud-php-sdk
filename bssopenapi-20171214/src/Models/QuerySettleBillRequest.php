<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySettleBillRequest extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var bool
     */
    public $isHideZeroCharge;

    /**
     * @var bool
     */
    public $isDisplayLocalCurrency;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $billOwnerId;
    protected $_name = [
        'billingCycle'           => 'BillingCycle',
        'type'                   => 'Type',
        'productCode'            => 'ProductCode',
        'productType'            => 'ProductType',
        'subscriptionType'       => 'SubscriptionType',
        'isHideZeroCharge'       => 'IsHideZeroCharge',
        'isDisplayLocalCurrency' => 'IsDisplayLocalCurrency',
        'nextToken'              => 'NextToken',
        'maxResults'             => 'MaxResults',
        'billOwnerId'            => 'BillOwnerId',
    ];

    public function validate()
    {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (null !== $this->isHideZeroCharge) {
            $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
        }
        if (null !== $this->isDisplayLocalCurrency) {
            $res['IsDisplayLocalCurrency'] = $this->isDisplayLocalCurrency;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['IsHideZeroCharge'])) {
            $model->isHideZeroCharge = $map['IsHideZeroCharge'];
        }
        if (isset($map['IsDisplayLocalCurrency'])) {
            $model->isDisplayLocalCurrency = $map['IsDisplayLocalCurrency'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }

        return $model;
    }
}
