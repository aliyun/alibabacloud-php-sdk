<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $roundDownDiscount;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $billAccountName;

    /**
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $usageStartTime;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $usageEndTime;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var string
     */
    public $subOrderId;

    /**
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $paymentTime;

    /**
     * @var float
     */
    public $tax;

    /**
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var string
     */
    public $paymentTransactionID;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $recordID;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @var string
     */
    public $billAccountID;

    /**
     * @var float
     */
    public $paymentAmount;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'                => 'Status',
        'roundDownDiscount'     => 'RoundDownDiscount',
        'item'                  => 'Item',
        'currency'              => 'Currency',
        'billAccountName'       => 'BillAccountName',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'subscriptionType'      => 'SubscriptionType',
        'usageStartTime'        => 'UsageStartTime',
        'bizType'               => 'BizType',
        'usageEndTime'          => 'UsageEndTime',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'subOrderId'            => 'SubOrderId',
        'afterTaxAmount'        => 'AfterTaxAmount',
        'outstandingAmount'     => 'OutstandingAmount',
        'paymentTime'           => 'PaymentTime',
        'tax'                   => 'Tax',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'pipCode'               => 'PipCode',
        'paymentTransactionID'  => 'PaymentTransactionID',
        'pretaxAmount'          => 'PretaxAmount',
        'commodityCode'         => 'CommodityCode',
        'productName'           => 'ProductName',
        'recordID'              => 'RecordID',
        'productDetail'         => 'ProductDetail',
        'paymentCurrency'       => 'PaymentCurrency',
        'ownerID'               => 'OwnerID',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'billAccountID'         => 'BillAccountID',
        'paymentAmount'         => 'PaymentAmount',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'productType'           => 'ProductType',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->usageStartTime) {
            $res['UsageStartTime'] = $this->usageStartTime;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->usageEndTime) {
            $res['UsageEndTime'] = $this->usageEndTime;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->paymentTransactionID) {
            $res['PaymentTransactionID'] = $this->paymentTransactionID;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['UsageStartTime'])) {
            $model->usageStartTime = $map['UsageStartTime'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['UsageEndTime'])) {
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['PaymentTransactionID'])) {
            $model->paymentTransactionID = $map['PaymentTransactionID'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
