<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var float
     */
    public $accountDiscount;

    /**
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @var string
     */
    public $billID;

    /**
     * @var float
     */
    public $chargeDiscount;

    /**
     * @var string
     */
    public $clearedTime;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

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
     * @var string
     */
    public $invoiceNo;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $linkedCustomerOrderID;

    /**
     * @var float
     */
    public $mybankPaymentAmount;

    /**
     * @var string
     */
    public $orderID;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $originalOrderID;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var string
     */
    public $payerAccount;

    /**
     * @var float
     */
    public $paymentAmount;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $paymentTime;

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
     * @var float
     */
    public $previousBillingCycleBalance;

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
    public $promotion;

    /**
     * @var string
     */
    public $quantity;

    /**
     * @var string
     */
    public $recordID;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $seller;

    /**
     * @var string
     */
    public $solutionID;

    /**
     * @var string
     */
    public $solutionName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $suborderID;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var float
     */
    public $tax;

    /**
     * @var string
     */
    public $usageEndTime;

    /**
     * @var string
     */
    public $usageStartTime;
    protected $_name = [
        'accountDiscount'             => 'AccountDiscount',
        'afterTaxAmount'              => 'AfterTaxAmount',
        'billID'                      => 'BillID',
        'chargeDiscount'              => 'ChargeDiscount',
        'clearedTime'                 => 'ClearedTime',
        'config'                      => 'Config',
        'createTime'                  => 'CreateTime',
        'currency'                    => 'Currency',
        'deductedByCashCoupons'       => 'DeductedByCashCoupons',
        'deductedByCoupons'           => 'DeductedByCoupons',
        'deductedByPrepaidCard'       => 'DeductedByPrepaidCard',
        'invoiceNo'                   => 'InvoiceNo',
        'item'                        => 'Item',
        'linkedCustomerOrderID'       => 'LinkedCustomerOrderID',
        'mybankPaymentAmount'         => 'MybankPaymentAmount',
        'orderID'                     => 'OrderID',
        'orderType'                   => 'OrderType',
        'originalOrderID'             => 'OriginalOrderID',
        'outstandingAmount'           => 'OutstandingAmount',
        'ownerID'                     => 'OwnerID',
        'payerAccount'                => 'PayerAccount',
        'paymentAmount'               => 'PaymentAmount',
        'paymentCurrency'             => 'PaymentCurrency',
        'paymentTime'                 => 'PaymentTime',
        'pretaxAmount'                => 'PretaxAmount',
        'pretaxAmountLocal'           => 'PretaxAmountLocal',
        'pretaxGrossAmount'           => 'PretaxGrossAmount',
        'previousBillingCycleBalance' => 'PreviousBillingCycleBalance',
        'productCode'                 => 'ProductCode',
        'productType'                 => 'ProductType',
        'promotion'                   => 'Promotion',
        'quantity'                    => 'Quantity',
        'recordID'                    => 'RecordID',
        'region'                      => 'Region',
        'seller'                      => 'Seller',
        'solutionID'                  => 'SolutionID',
        'solutionName'                => 'SolutionName',
        'status'                      => 'Status',
        'suborderID'                  => 'SuborderID',
        'subscriptionType'            => 'SubscriptionType',
        'tax'                         => 'Tax',
        'usageEndTime'                => 'UsageEndTime',
        'usageStartTime'              => 'UsageStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDiscount) {
            $res['AccountDiscount'] = $this->accountDiscount;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->billID) {
            $res['BillID'] = $this->billID;
        }
        if (null !== $this->chargeDiscount) {
            $res['ChargeDiscount'] = $this->chargeDiscount;
        }
        if (null !== $this->clearedTime) {
            $res['ClearedTime'] = $this->clearedTime;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->linkedCustomerOrderID) {
            $res['LinkedCustomerOrderID'] = $this->linkedCustomerOrderID;
        }
        if (null !== $this->mybankPaymentAmount) {
            $res['MybankPaymentAmount'] = $this->mybankPaymentAmount;
        }
        if (null !== $this->orderID) {
            $res['OrderID'] = $this->orderID;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->originalOrderID) {
            $res['OriginalOrderID'] = $this->originalOrderID;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->payerAccount) {
            $res['PayerAccount'] = $this->payerAccount;
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
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->previousBillingCycleBalance) {
            $res['PreviousBillingCycleBalance'] = $this->previousBillingCycleBalance;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->promotion) {
            $res['Promotion'] = $this->promotion;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->seller) {
            $res['Seller'] = $this->seller;
        }
        if (null !== $this->solutionID) {
            $res['SolutionID'] = $this->solutionID;
        }
        if (null !== $this->solutionName) {
            $res['SolutionName'] = $this->solutionName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->suborderID) {
            $res['SuborderID'] = $this->suborderID;
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
        if (isset($map['AccountDiscount'])) {
            $model->accountDiscount = $map['AccountDiscount'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['BillID'])) {
            $model->billID = $map['BillID'];
        }
        if (isset($map['ChargeDiscount'])) {
            $model->chargeDiscount = $map['ChargeDiscount'];
        }
        if (isset($map['ClearedTime'])) {
            $model->clearedTime = $map['ClearedTime'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['LinkedCustomerOrderID'])) {
            $model->linkedCustomerOrderID = $map['LinkedCustomerOrderID'];
        }
        if (isset($map['MybankPaymentAmount'])) {
            $model->mybankPaymentAmount = $map['MybankPaymentAmount'];
        }
        if (isset($map['OrderID'])) {
            $model->orderID = $map['OrderID'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OriginalOrderID'])) {
            $model->originalOrderID = $map['OriginalOrderID'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PayerAccount'])) {
            $model->payerAccount = $map['PayerAccount'];
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
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['PreviousBillingCycleBalance'])) {
            $model->previousBillingCycleBalance = $map['PreviousBillingCycleBalance'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Promotion'])) {
            $model->promotion = $map['Promotion'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Seller'])) {
            $model->seller = $map['Seller'];
        }
        if (isset($map['SolutionID'])) {
            $model->solutionID = $map['SolutionID'];
        }
        if (isset($map['SolutionName'])) {
            $model->solutionName = $map['SolutionName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuborderID'])) {
            $model->suborderID = $map['SuborderID'];
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
