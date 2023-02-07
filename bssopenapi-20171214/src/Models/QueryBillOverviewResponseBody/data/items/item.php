<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @example 185766xxxx
     *
     * @var string
     */
    public $billAccountID;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @example PayAsYouGoBill
     *
     * @var string
     */
    public $item;

    /**
     * @example 0
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @example 1222
     *
     * @var string
     */
    public $ownerID;

    /**
     * @example 100
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @example USD
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @example 100
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @example 100
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example NAT Gateway (Pay-As-You-Go)
     *
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @example 0
     *
     * @var string
     */
    public $roundDownDiscount;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example 0
     *
     * @var float
     */
    public $tax;
    protected $_name = [
        'adjustAmount'          => 'AdjustAmount',
        'afterTaxAmount'        => 'AfterTaxAmount',
        'billAccountID'         => 'BillAccountID',
        'billAccountName'       => 'BillAccountName',
        'bizType'               => 'BizType',
        'cashAmount'            => 'CashAmount',
        'commodityCode'         => 'CommodityCode',
        'currency'              => 'Currency',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'item'                  => 'Item',
        'outstandingAmount'     => 'OutstandingAmount',
        'ownerID'               => 'OwnerID',
        'paymentAmount'         => 'PaymentAmount',
        'paymentCurrency'       => 'PaymentCurrency',
        'pipCode'               => 'PipCode',
        'pretaxAmount'          => 'PretaxAmount',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
        'productDetail'         => 'ProductDetail',
        'productName'           => 'ProductName',
        'productType'           => 'ProductType',
        'roundDownDiscount'     => 'RoundDownDiscount',
        'subscriptionType'      => 'SubscriptionType',
        'tax'                   => 'Tax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustAmount) {
            $res['AdjustAmount'] = $this->adjustAmount;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
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
        if (isset($map['AdjustAmount'])) {
            $model->adjustAmount = $map['AdjustAmount'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }

        return $model;
    }
}
