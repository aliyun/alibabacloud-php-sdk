<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0.01
     *
     * @var string
     */
    public $acceptedOffsetAmount;

    /**
     * @example 1990699401005016
     *
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @example 202506
     *
     * @var int
     */
    public $billingCycle;

    /**
     * @example 202506
     *
     * @var string
     */
    public $businessId;

    /**
     * @example 2025-06-01 00:00:00
     *
     * @var string
     */
    public $businessTime;

    /**
     * @example pts
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @example 2025-06-91 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 12345
     *
     * @var string
     */
    public $id;

    /**
     * @example ALIYUN_SERVICE
     *
     * @var string
     */
    public $invoiceIssuer;

    /**
     * @example 0.01
     *
     * @var string
     */
    public $invoiceableAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $invoicedAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $offsetAmount;

    /**
     * @example pts
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example 1990699401005016
     *
     * @var int
     */
    public $resourceOwnerAccountId;

    /**
     * @var string
     */
    public $resourceOwnerAccountName;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0.01
     *
     * @var string
     */
    public $totalAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'acceptedOffsetAmount' => 'AcceptedOffsetAmount',
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'billingCycle' => 'BillingCycle',
        'businessId' => 'BusinessId',
        'businessTime' => 'BusinessTime',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'invoiceIssuer' => 'InvoiceIssuer',
        'invoiceableAmount' => 'InvoiceableAmount',
        'invoicedAmount' => 'InvoicedAmount',
        'offsetAmount' => 'OffsetAmount',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'resourceOwnerAccountId' => 'ResourceOwnerAccountId',
        'resourceOwnerAccountName' => 'ResourceOwnerAccountName',
        'status' => 'Status',
        'totalAmount' => 'TotalAmount',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptedOffsetAmount) {
            $res['AcceptedOffsetAmount'] = $this->acceptedOffsetAmount;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->invoiceIssuer) {
            $res['InvoiceIssuer'] = $this->invoiceIssuer;
        }
        if (null !== $this->invoiceableAmount) {
            $res['InvoiceableAmount'] = $this->invoiceableAmount;
        }
        if (null !== $this->invoicedAmount) {
            $res['InvoicedAmount'] = $this->invoicedAmount;
        }
        if (null !== $this->offsetAmount) {
            $res['OffsetAmount'] = $this->offsetAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->resourceOwnerAccountId) {
            $res['ResourceOwnerAccountId'] = $this->resourceOwnerAccountId;
        }
        if (null !== $this->resourceOwnerAccountName) {
            $res['ResourceOwnerAccountName'] = $this->resourceOwnerAccountName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptedOffsetAmount'])) {
            $model->acceptedOffsetAmount = $map['AcceptedOffsetAmount'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InvoiceIssuer'])) {
            $model->invoiceIssuer = $map['InvoiceIssuer'];
        }
        if (isset($map['InvoiceableAmount'])) {
            $model->invoiceableAmount = $map['InvoiceableAmount'];
        }
        if (isset($map['InvoicedAmount'])) {
            $model->invoicedAmount = $map['InvoicedAmount'];
        }
        if (isset($map['OffsetAmount'])) {
            $model->offsetAmount = $map['OffsetAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ResourceOwnerAccountId'])) {
            $model->resourceOwnerAccountId = $map['ResourceOwnerAccountId'];
        }
        if (isset($map['ResourceOwnerAccountName'])) {
            $model->resourceOwnerAccountName = $map['ResourceOwnerAccountName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
