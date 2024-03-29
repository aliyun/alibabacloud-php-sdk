<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody\data\modules;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $accountingUnit;

    /**
     * @example SubscriptionOrder
     *
     * @var string
     */
    public $billType;

    /**
     * @example 2020-03
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0
     *
     * @var string
     */
    public $deductedByCashCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $deductedByCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $deductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapDeductedByCashCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapDeductedByCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapPaymentAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapPretaxAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapPretaxAmountLocal;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $gaapPricingDiscount;

    /**
     * @example OSSBAG-cn-0xl0xxxxxx
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example 0.75
     *
     * @var string
     */
    public $monthGaapDeductedByCashCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $monthGaapDeductedByCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $monthGaapDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var string
     */
    public $monthGaapPaymentAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $monthGaapPretaxAmount;

    /**
     * @example 0.99
     *
     * @var string
     */
    public $monthGaapPretaxAmountLocal;

    /**
     * @example 0.99
     *
     * @var string
     */
    public $monthGaapPretaxGrossAmount;

    /**
     * @example 0,.25
     *
     * @var string
     */
    public $monthGaapPricingDiscount;

    /**
     * @example 213123213123
     *
     * @var string
     */
    public $orderId;

    /**
     * @example New
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 123213123123
     *
     * @var string
     */
    public $ownerID;

    /**
     * @example 2018-06-15 15:59:57
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 23534534
     *
     * @var string
     */
    public $payerAccount;

    /**
     * @example 0
     *
     * @var string
     */
    public $paymentAmount;

    /**
     * @example CNY
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @example 123
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @example 1
     *
     * @var string
     */
    public $pricingDiscount;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @example 12434345
     *
     * @var string
     */
    public $subOrderId;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedDeductedByCashCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedDeductedByCoupons;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedPaymentAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedPretaxAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedPretaxAmountLocal;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $unallocatedPricingDiscount;

    /**
     * @example 2019-05-01 00:00:00
     *
     * @var string
     */
    public $usageEndDate;

    /**
     * @example 2019-04-01 00:00:00
     *
     * @var string
     */
    public $usageStartDate;
    protected $_name = [
        'accountingUnit'                   => 'AccountingUnit',
        'billType'                         => 'BillType',
        'billingCycle'                     => 'BillingCycle',
        'currency'                         => 'Currency',
        'deductedByCashCoupons'            => 'DeductedByCashCoupons',
        'deductedByCoupons'                => 'DeductedByCoupons',
        'deductedByPrepaidCard'            => 'DeductedByPrepaidCard',
        'gaapDeductedByCashCoupons'        => 'GaapDeductedByCashCoupons',
        'gaapDeductedByCoupons'            => 'GaapDeductedByCoupons',
        'gaapDeductedByPrepaidCard'        => 'GaapDeductedByPrepaidCard',
        'gaapPaymentAmount'                => 'GaapPaymentAmount',
        'gaapPretaxAmount'                 => 'GaapPretaxAmount',
        'gaapPretaxAmountLocal'            => 'GaapPretaxAmountLocal',
        'gaapPretaxGrossAmount'            => 'GaapPretaxGrossAmount',
        'gaapPricingDiscount'              => 'GaapPricingDiscount',
        'instanceID'                       => 'InstanceID',
        'monthGaapDeductedByCashCoupons'   => 'MonthGaapDeductedByCashCoupons',
        'monthGaapDeductedByCoupons'       => 'MonthGaapDeductedByCoupons',
        'monthGaapDeductedByPrepaidCard'   => 'MonthGaapDeductedByPrepaidCard',
        'monthGaapPaymentAmount'           => 'MonthGaapPaymentAmount',
        'monthGaapPretaxAmount'            => 'MonthGaapPretaxAmount',
        'monthGaapPretaxAmountLocal'       => 'MonthGaapPretaxAmountLocal',
        'monthGaapPretaxGrossAmount'       => 'MonthGaapPretaxGrossAmount',
        'monthGaapPricingDiscount'         => 'MonthGaapPricingDiscount',
        'orderId'                          => 'OrderId',
        'orderType'                        => 'OrderType',
        'ownerID'                          => 'OwnerID',
        'payTime'                          => 'PayTime',
        'payerAccount'                     => 'PayerAccount',
        'paymentAmount'                    => 'PaymentAmount',
        'paymentCurrency'                  => 'PaymentCurrency',
        'pretaxAmount'                     => 'PretaxAmount',
        'pretaxAmountLocal'                => 'PretaxAmountLocal',
        'pretaxGrossAmount'                => 'PretaxGrossAmount',
        'pricingDiscount'                  => 'PricingDiscount',
        'productCode'                      => 'ProductCode',
        'productType'                      => 'ProductType',
        'region'                           => 'Region',
        'resourceGroup'                    => 'ResourceGroup',
        'subOrderId'                       => 'SubOrderId',
        'subscriptionType'                 => 'SubscriptionType',
        'tag'                              => 'Tag',
        'unallocatedDeductedByCashCoupons' => 'UnallocatedDeductedByCashCoupons',
        'unallocatedDeductedByCoupons'     => 'UnallocatedDeductedByCoupons',
        'unallocatedDeductedByPrepaidCard' => 'UnallocatedDeductedByPrepaidCard',
        'unallocatedPaymentAmount'         => 'UnallocatedPaymentAmount',
        'unallocatedPretaxAmount'          => 'UnallocatedPretaxAmount',
        'unallocatedPretaxAmountLocal'     => 'UnallocatedPretaxAmountLocal',
        'unallocatedPretaxGrossAmount'     => 'UnallocatedPretaxGrossAmount',
        'unallocatedPricingDiscount'       => 'UnallocatedPricingDiscount',
        'usageEndDate'                     => 'UsageEndDate',
        'usageStartDate'                   => 'UsageStartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountingUnit) {
            $res['AccountingUnit'] = $this->accountingUnit;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
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
        if (null !== $this->gaapDeductedByCashCoupons) {
            $res['GaapDeductedByCashCoupons'] = $this->gaapDeductedByCashCoupons;
        }
        if (null !== $this->gaapDeductedByCoupons) {
            $res['GaapDeductedByCoupons'] = $this->gaapDeductedByCoupons;
        }
        if (null !== $this->gaapDeductedByPrepaidCard) {
            $res['GaapDeductedByPrepaidCard'] = $this->gaapDeductedByPrepaidCard;
        }
        if (null !== $this->gaapPaymentAmount) {
            $res['GaapPaymentAmount'] = $this->gaapPaymentAmount;
        }
        if (null !== $this->gaapPretaxAmount) {
            $res['GaapPretaxAmount'] = $this->gaapPretaxAmount;
        }
        if (null !== $this->gaapPretaxAmountLocal) {
            $res['GaapPretaxAmountLocal'] = $this->gaapPretaxAmountLocal;
        }
        if (null !== $this->gaapPretaxGrossAmount) {
            $res['GaapPretaxGrossAmount'] = $this->gaapPretaxGrossAmount;
        }
        if (null !== $this->gaapPricingDiscount) {
            $res['GaapPricingDiscount'] = $this->gaapPricingDiscount;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->monthGaapDeductedByCashCoupons) {
            $res['MonthGaapDeductedByCashCoupons'] = $this->monthGaapDeductedByCashCoupons;
        }
        if (null !== $this->monthGaapDeductedByCoupons) {
            $res['MonthGaapDeductedByCoupons'] = $this->monthGaapDeductedByCoupons;
        }
        if (null !== $this->monthGaapDeductedByPrepaidCard) {
            $res['MonthGaapDeductedByPrepaidCard'] = $this->monthGaapDeductedByPrepaidCard;
        }
        if (null !== $this->monthGaapPaymentAmount) {
            $res['MonthGaapPaymentAmount'] = $this->monthGaapPaymentAmount;
        }
        if (null !== $this->monthGaapPretaxAmount) {
            $res['MonthGaapPretaxAmount'] = $this->monthGaapPretaxAmount;
        }
        if (null !== $this->monthGaapPretaxAmountLocal) {
            $res['MonthGaapPretaxAmountLocal'] = $this->monthGaapPretaxAmountLocal;
        }
        if (null !== $this->monthGaapPretaxGrossAmount) {
            $res['MonthGaapPretaxGrossAmount'] = $this->monthGaapPretaxGrossAmount;
        }
        if (null !== $this->monthGaapPricingDiscount) {
            $res['MonthGaapPricingDiscount'] = $this->monthGaapPricingDiscount;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
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
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->pricingDiscount) {
            $res['PricingDiscount'] = $this->pricingDiscount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->unallocatedDeductedByCashCoupons) {
            $res['UnallocatedDeductedByCashCoupons'] = $this->unallocatedDeductedByCashCoupons;
        }
        if (null !== $this->unallocatedDeductedByCoupons) {
            $res['UnallocatedDeductedByCoupons'] = $this->unallocatedDeductedByCoupons;
        }
        if (null !== $this->unallocatedDeductedByPrepaidCard) {
            $res['UnallocatedDeductedByPrepaidCard'] = $this->unallocatedDeductedByPrepaidCard;
        }
        if (null !== $this->unallocatedPaymentAmount) {
            $res['UnallocatedPaymentAmount'] = $this->unallocatedPaymentAmount;
        }
        if (null !== $this->unallocatedPretaxAmount) {
            $res['UnallocatedPretaxAmount'] = $this->unallocatedPretaxAmount;
        }
        if (null !== $this->unallocatedPretaxAmountLocal) {
            $res['UnallocatedPretaxAmountLocal'] = $this->unallocatedPretaxAmountLocal;
        }
        if (null !== $this->unallocatedPretaxGrossAmount) {
            $res['UnallocatedPretaxGrossAmount'] = $this->unallocatedPretaxGrossAmount;
        }
        if (null !== $this->unallocatedPricingDiscount) {
            $res['UnallocatedPricingDiscount'] = $this->unallocatedPricingDiscount;
        }
        if (null !== $this->usageEndDate) {
            $res['UsageEndDate'] = $this->usageEndDate;
        }
        if (null !== $this->usageStartDate) {
            $res['UsageStartDate'] = $this->usageStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountingUnit'])) {
            $model->accountingUnit = $map['AccountingUnit'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
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
        if (isset($map['GaapDeductedByCashCoupons'])) {
            $model->gaapDeductedByCashCoupons = $map['GaapDeductedByCashCoupons'];
        }
        if (isset($map['GaapDeductedByCoupons'])) {
            $model->gaapDeductedByCoupons = $map['GaapDeductedByCoupons'];
        }
        if (isset($map['GaapDeductedByPrepaidCard'])) {
            $model->gaapDeductedByPrepaidCard = $map['GaapDeductedByPrepaidCard'];
        }
        if (isset($map['GaapPaymentAmount'])) {
            $model->gaapPaymentAmount = $map['GaapPaymentAmount'];
        }
        if (isset($map['GaapPretaxAmount'])) {
            $model->gaapPretaxAmount = $map['GaapPretaxAmount'];
        }
        if (isset($map['GaapPretaxAmountLocal'])) {
            $model->gaapPretaxAmountLocal = $map['GaapPretaxAmountLocal'];
        }
        if (isset($map['GaapPretaxGrossAmount'])) {
            $model->gaapPretaxGrossAmount = $map['GaapPretaxGrossAmount'];
        }
        if (isset($map['GaapPricingDiscount'])) {
            $model->gaapPricingDiscount = $map['GaapPricingDiscount'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['MonthGaapDeductedByCashCoupons'])) {
            $model->monthGaapDeductedByCashCoupons = $map['MonthGaapDeductedByCashCoupons'];
        }
        if (isset($map['MonthGaapDeductedByCoupons'])) {
            $model->monthGaapDeductedByCoupons = $map['MonthGaapDeductedByCoupons'];
        }
        if (isset($map['MonthGaapDeductedByPrepaidCard'])) {
            $model->monthGaapDeductedByPrepaidCard = $map['MonthGaapDeductedByPrepaidCard'];
        }
        if (isset($map['MonthGaapPaymentAmount'])) {
            $model->monthGaapPaymentAmount = $map['MonthGaapPaymentAmount'];
        }
        if (isset($map['MonthGaapPretaxAmount'])) {
            $model->monthGaapPretaxAmount = $map['MonthGaapPretaxAmount'];
        }
        if (isset($map['MonthGaapPretaxAmountLocal'])) {
            $model->monthGaapPretaxAmountLocal = $map['MonthGaapPretaxAmountLocal'];
        }
        if (isset($map['MonthGaapPretaxGrossAmount'])) {
            $model->monthGaapPretaxGrossAmount = $map['MonthGaapPretaxGrossAmount'];
        }
        if (isset($map['MonthGaapPricingDiscount'])) {
            $model->monthGaapPricingDiscount = $map['MonthGaapPricingDiscount'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
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
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['PricingDiscount'])) {
            $model->pricingDiscount = $map['PricingDiscount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['UnallocatedDeductedByCashCoupons'])) {
            $model->unallocatedDeductedByCashCoupons = $map['UnallocatedDeductedByCashCoupons'];
        }
        if (isset($map['UnallocatedDeductedByCoupons'])) {
            $model->unallocatedDeductedByCoupons = $map['UnallocatedDeductedByCoupons'];
        }
        if (isset($map['UnallocatedDeductedByPrepaidCard'])) {
            $model->unallocatedDeductedByPrepaidCard = $map['UnallocatedDeductedByPrepaidCard'];
        }
        if (isset($map['UnallocatedPaymentAmount'])) {
            $model->unallocatedPaymentAmount = $map['UnallocatedPaymentAmount'];
        }
        if (isset($map['UnallocatedPretaxAmount'])) {
            $model->unallocatedPretaxAmount = $map['UnallocatedPretaxAmount'];
        }
        if (isset($map['UnallocatedPretaxAmountLocal'])) {
            $model->unallocatedPretaxAmountLocal = $map['UnallocatedPretaxAmountLocal'];
        }
        if (isset($map['UnallocatedPretaxGrossAmount'])) {
            $model->unallocatedPretaxGrossAmount = $map['UnallocatedPretaxGrossAmount'];
        }
        if (isset($map['UnallocatedPricingDiscount'])) {
            $model->unallocatedPricingDiscount = $map['UnallocatedPricingDiscount'];
        }
        if (isset($map['UsageEndDate'])) {
            $model->usageEndDate = $map['UsageEndDate'];
        }
        if (isset($map['UsageStartDate'])) {
            $model->usageStartDate = $map['UsageStartDate'];
        }

        return $model;
    }
}
