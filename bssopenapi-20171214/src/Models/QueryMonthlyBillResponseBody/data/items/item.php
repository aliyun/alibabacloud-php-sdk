<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var string
     */
    public $item;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var float
     */
    public $paymentAmount;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

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
    public $solutionCode;

    /**
     * @var string
     */
    public $solutionName;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var float
     */
    public $tax;
    protected $_name = [
        'afterTaxAmount'        => 'AfterTaxAmount',
        'currency'              => 'Currency',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'item'                  => 'Item',
        'outstandingAmount'     => 'OutstandingAmount',
        'paymentAmount'         => 'PaymentAmount',
        'paymentCurrency'       => 'PaymentCurrency',
        'pretaxAmount'          => 'PretaxAmount',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'productCode'           => 'ProductCode',
        'productType'           => 'ProductType',
        'solutionCode'          => 'SolutionCode',
        'solutionName'          => 'SolutionName',
        'subscriptionType'      => 'SubscriptionType',
        'tax'                   => 'Tax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
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
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
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
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->solutionCode) {
            $res['SolutionCode'] = $this->solutionCode;
        }
        if (null !== $this->solutionName) {
            $res['SolutionName'] = $this->solutionName;
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
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
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
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SolutionCode'])) {
            $model->solutionCode = $map['SolutionCode'];
        }
        if (isset($map['SolutionName'])) {
            $model->solutionName = $map['SolutionName'];
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
