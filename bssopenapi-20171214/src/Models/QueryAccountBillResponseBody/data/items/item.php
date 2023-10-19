<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The billing date.
     *
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @description The amount deducted by using prepaid cards.
     *
     * @example 1857xxxxx489
     *
     * @var string
     */
    public $billAccountID;

    /**
     * @description The name of the member.
     *
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @description The code of the service. The service code is consistent with that displayed in User Center.
     *
     * @example 2021-03-01
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method
     *   PayAsYouGo: the pay-as-you-go billing method
     *
     **
     *
     ****A value is returned only if the IsGroupByProduct parameter is set to true.
     *
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @description Not allocated
     *
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @description The discount amount.
     *
     * @example The unsettled amount or the amount settled with credits.
     *
     * @var string
     */
    public $costUnit;

    /**
     * @description The amount deducted by using credit refunds.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The name of the account to which the bill belongs.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description The ID of the member.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description The business type.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description The ID of the account to which the bill belongs.
     *
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description The amount paid in cash. The amount that was deducted by using credit refunds is included.
     *
     * @example 0
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description The amount deducted by using vouchers.
     *
     * @example 325434254
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The name of the service.
     *
     **
     *
     ****A value is returned only if the **IsGroupByProduct **parameter is set to true.
     *
     * @example aligzncloudtest2
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The amount deducted by using coupons.
     *
     * @example 0
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description The name of the Alibaba Cloud account.
     *
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @description The details of the bills.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description The cost center.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description The pretax gross amount.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The pretax amount.
     *
     * @example rds
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the currency. Valid values:
     *
     *   CNY
     *   USD
     *   JPY
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'adjustAmount'          => 'AdjustAmount',
        'billAccountID'         => 'BillAccountID',
        'billAccountName'       => 'BillAccountName',
        'billingDate'           => 'BillingDate',
        'bizType'               => 'BizType',
        'cashAmount'            => 'CashAmount',
        'costUnit'              => 'CostUnit',
        'currency'              => 'Currency',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'outstandingAmount'     => 'OutstandingAmount',
        'ownerID'               => 'OwnerID',
        'ownerName'             => 'OwnerName',
        'paymentAmount'         => 'PaymentAmount',
        'pipCode'               => 'PipCode',
        'pretaxAmount'          => 'PretaxAmount',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
        'productName'           => 'ProductName',
        'subscriptionType'      => 'SubscriptionType',
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
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
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
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
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
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
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
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
