<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $acceptedOffsetAmount;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessTime;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceIssuer;

    /**
     * @var string
     */
    public $invoiceableAmount;

    /**
     * @var string
     */
    public $invoicedAmount;

    /**
     * @var string
     */
    public $offsetAmount;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $resourceOwnerAccountId;

    /**
     * @var string
     */
    public $resourceOwnerAccountName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $totalAmount;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
