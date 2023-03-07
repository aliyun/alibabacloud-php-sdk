<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The amount deducted by using credit refunds.
     *
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @description The amount paid after the tax is deducted.
     *
     * @example 0
     *
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @description The ID of the account to which the bill belongs.
     *
     * @example 185xxxxx489
     *
     * @var string
     */
    public $billAccountID;

    /**
     * @description The name of the account to which the bill belongs.
     *
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @description The business type.
     *
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The amount paid in cash. The amount that was deducted by using credit refunds is not included.
     *
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @description The code of the commodity. The commodity code is the same as that displayed in User Center.
     *
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The type of the currency.
     *
     *   CNY
     *   USD
     *   JPY
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount deducted by using vouchers.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description The amount deducted by using coupons.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description The amount deducted by using prepaid cards.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description The discount amount.
     *
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description The type of the bill. Valid values:
     *
     *   Subscription
     *   OrderPayAsYouGoBill
     *   Refund
     *   Adjustment
     *
     * @example SubscriptionOrder
     *
     * @var string
     */
    public $item;

    /**
     * @description The unsettled amount.
     *
     * @example 0
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description The ID of the member. This parameter is returned in a multi-account payment scenario.
     *
     * @example 3532535235
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The amount paid in cash. The amount that was deducted by using credit refunds is included.
     *
     * @example 0
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description The currency used for payment.
     *
     * @example USD
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description The time when the bill was paid.
     *
     * @example 2020-03-11 08:00:00
     *
     * @var string
     */
    public $paymentTime;

    /**
     * @description The ID of the transaction.
     *
     * @example 2O3AADJFEAF2PDKSFAMFCB11918
     *
     * @var string
     */
    public $paymentTransactionID;

    /**
     * @description The code of the service. The service code is the same as that displayed in User Center.
     *
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @description The pretax amount.
     *
     * @example 100
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description The pretax amount paid in local currency.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @description The pretax gross amount.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The details of the service.
     *
     * @example ApsaraDB RDS (subscription)
     *
     * @var string
     */
    public $productDetail;

    /**
     * @description The name of the service.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $productName;

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
     * @example 2020xxxx5912
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The round down discount.
     *
     * @example 0
     *
     * @var string
     */
    public $roundDownDiscount;

    /**
     * @description The payment status of the bill. Valid values:
     *
     *   PayFinish: The bill is paid.
     *   PayUnclear: The bill is not cleared.
     *   PayUnsettle: The bill is not settled.
     *   NoSettle: The bill is free of settlement.
     *
     * @example PayFinish
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the order corresponding to the bill.
     *
     * @example 325345254353
     *
     * @var string
     */
    public $subOrderId;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription
     *   PayAsYouGo
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The tax.
     *
     * @example 0
     *
     * @var float
     */
    public $tax;

    /**
     * @description The end time of the bill.
     *
     * @example 2020-03-11 08:00:00
     *
     * @var string
     */
    public $usageEndTime;

    /**
     * @description The start time of the bill.
     *
     * @example 2020-03-11 07:00:00
     *
     * @var string
     */
    public $usageStartTime;
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
        'paymentTime'           => 'PaymentTime',
        'paymentTransactionID'  => 'PaymentTransactionID',
        'pipCode'               => 'PipCode',
        'pretaxAmount'          => 'PretaxAmount',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
        'productDetail'         => 'ProductDetail',
        'productName'           => 'ProductName',
        'productType'           => 'ProductType',
        'recordID'              => 'RecordID',
        'roundDownDiscount'     => 'RoundDownDiscount',
        'status'                => 'Status',
        'subOrderId'            => 'SubOrderId',
        'subscriptionType'      => 'SubscriptionType',
        'tax'                   => 'Tax',
        'usageEndTime'          => 'UsageEndTime',
        'usageStartTime'        => 'UsageStartTime',
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
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->paymentTransactionID) {
            $res['PaymentTransactionID'] = $this->paymentTransactionID;
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
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->usageEndTime) {
            $res['UsageEndTime'] = $this->usageEndTime;
        }
        if (null !== $this->usageStartTime) {
            $res['UsageStartTime'] = $this->usageStartTime;
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
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['PaymentTransactionID'])) {
            $model->paymentTransactionID = $map['PaymentTransactionID'];
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
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['UsageEndTime'])) {
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if (isset($map['UsageStartTime'])) {
            $model->usageStartTime = $map['UsageStartTime'];
        }

        return $model;
    }
}
