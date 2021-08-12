<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $billAccountName;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @var float
     */
    public $deductedByCoupons;

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
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $costUnit;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'pipCode'               => 'PipCode',
        'pretaxAmount'          => 'PretaxAmount',
        'billingDate'           => 'BillingDate',
        'productName'           => 'ProductName',
        'ownerName'             => 'OwnerName',
        'currency'              => 'Currency',
        'billAccountName'       => 'BillAccountName',
        'subscriptionType'      => 'SubscriptionType',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'bizType'               => 'BizType',
        'ownerID'               => 'OwnerID',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'billAccountID'         => 'BillAccountID',
        'paymentAmount'         => 'PaymentAmount',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'outstandingAmount'     => 'OutstandingAmount',
        'costUnit'              => 'CostUnit',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
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
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
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
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
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
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
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
