<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody\data\modules;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $gaapDeductedByCashCoupons;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $monthGaapPretaxAmount;

    /**
     * @var string
     */
    public $deductedByCoupons;

    /**
     * @var string
     */
    public $subOrderId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $monthGaapDeductedByPrepaidCard;

    /**
     * @var string
     */
    public $unallocatedDeductedByCashCoupons;

    /**
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $payerAccount;

    /**
     * @var string
     */
    public $monthGaapPretaxAmountLocal;

    /**
     * @var string
     */
    public $accountingUnit;

    /**
     * @var string
     */
    public $gaapPretaxAmountLocal;

    /**
     * @var string
     */
    public $unallocatedDeductedByPrepaidCard;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $paymentAmount;

    /**
     * @var string
     */
    public $monthGaapPretaxGrossAmount;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $unallocatedPricingDiscount;

    /**
     * @var string
     */
    public $monthGaapDeductedByCashCoupons;

    /**
     * @var string
     */
    public $unallocatedPretaxGrossAmount;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $gaapDeductedByCoupons;

    /**
     * @var string
     */
    public $deductedByCashCoupons;

    /**
     * @var string
     */
    public $gaapDeductedByPrepaidCard;

    /**
     * @var string
     */
    public $gaapPaymentAmount;

    /**
     * @var string
     */
    public $unallocatedPretaxAmountLocal;

    /**
     * @var string
     */
    public $monthGaapPricingDiscount;

    /**
     * @var string
     */
    public $pricingDiscount;

    /**
     * @var string
     */
    public $gaapPricingDiscount;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $unallocatedDeductedByCoupons;

    /**
     * @var string
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $unallocatedPretaxAmount;

    /**
     * @var string
     */
    public $gaapPretaxGrossAmount;

    /**
     * @var string
     */
    public $unallocatedPaymentAmount;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var string
     */
    public $deductedByPrepaidCard;

    /**
     * @var string
     */
    public $gaapPretaxAmount;

    /**
     * @var string
     */
    public $monthGaapDeductedByCoupons;

    /**
     * @var string
     */
    public $monthGaapPaymentAmount;

    /**
     * @var string
     */
    public $usageEndDate;

    /**
     * @var string
     */
    public $usageStartDate;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'gaapDeductedByCashCoupons'        => 'GaapDeductedByCashCoupons',
        'subscriptionType'                 => 'SubscriptionType',
        'monthGaapPretaxAmount'            => 'MonthGaapPretaxAmount',
        'deductedByCoupons'                => 'DeductedByCoupons',
        'subOrderId'                       => 'SubOrderId',
        'region'                           => 'Region',
        'orderType'                        => 'OrderType',
        'monthGaapDeductedByPrepaidCard'   => 'MonthGaapDeductedByPrepaidCard',
        'unallocatedDeductedByCashCoupons' => 'UnallocatedDeductedByCashCoupons',
        'pretaxAmountLocal'                => 'PretaxAmountLocal',
        'billingCycle'                     => 'BillingCycle',
        'payerAccount'                     => 'PayerAccount',
        'monthGaapPretaxAmountLocal'       => 'MonthGaapPretaxAmountLocal',
        'accountingUnit'                   => 'AccountingUnit',
        'gaapPretaxAmountLocal'            => 'GaapPretaxAmountLocal',
        'unallocatedDeductedByPrepaidCard' => 'UnallocatedDeductedByPrepaidCard',
        'productType'                      => 'ProductType',
        'paymentAmount'                    => 'PaymentAmount',
        'monthGaapPretaxGrossAmount'       => 'MonthGaapPretaxGrossAmount',
        'billType'                         => 'BillType',
        'payTime'                          => 'PayTime',
        'pretaxGrossAmount'                => 'PretaxGrossAmount',
        'orderId'                          => 'OrderId',
        'unallocatedPricingDiscount'       => 'UnallocatedPricingDiscount',
        'monthGaapDeductedByCashCoupons'   => 'MonthGaapDeductedByCashCoupons',
        'unallocatedPretaxGrossAmount'     => 'UnallocatedPretaxGrossAmount',
        'instanceID'                       => 'InstanceID',
        'tag'                              => 'Tag',
        'currency'                         => 'Currency',
        'gaapDeductedByCoupons'            => 'GaapDeductedByCoupons',
        'deductedByCashCoupons'            => 'DeductedByCashCoupons',
        'gaapDeductedByPrepaidCard'        => 'GaapDeductedByPrepaidCard',
        'gaapPaymentAmount'                => 'GaapPaymentAmount',
        'unallocatedPretaxAmountLocal'     => 'UnallocatedPretaxAmountLocal',
        'monthGaapPricingDiscount'         => 'MonthGaapPricingDiscount',
        'pricingDiscount'                  => 'PricingDiscount',
        'gaapPricingDiscount'              => 'GaapPricingDiscount',
        'resourceGroup'                    => 'ResourceGroup',
        'unallocatedDeductedByCoupons'     => 'UnallocatedDeductedByCoupons',
        'pretaxAmount'                     => 'PretaxAmount',
        'unallocatedPretaxAmount'          => 'UnallocatedPretaxAmount',
        'gaapPretaxGrossAmount'            => 'GaapPretaxGrossAmount',
        'unallocatedPaymentAmount'         => 'UnallocatedPaymentAmount',
        'paymentCurrency'                  => 'PaymentCurrency',
        'ownerID'                          => 'OwnerID',
        'deductedByPrepaidCard'            => 'DeductedByPrepaidCard',
        'gaapPretaxAmount'                 => 'GaapPretaxAmount',
        'monthGaapDeductedByCoupons'       => 'MonthGaapDeductedByCoupons',
        'monthGaapPaymentAmount'           => 'MonthGaapPaymentAmount',
        'usageEndDate'                     => 'UsageEndDate',
        'usageStartDate'                   => 'UsageStartDate',
        'productCode'                      => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gaapDeductedByCashCoupons) {
            $res['GaapDeductedByCashCoupons'] = $this->gaapDeductedByCashCoupons;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->monthGaapPretaxAmount) {
            $res['MonthGaapPretaxAmount'] = $this->monthGaapPretaxAmount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->monthGaapDeductedByPrepaidCard) {
            $res['MonthGaapDeductedByPrepaidCard'] = $this->monthGaapDeductedByPrepaidCard;
        }
        if (null !== $this->unallocatedDeductedByCashCoupons) {
            $res['UnallocatedDeductedByCashCoupons'] = $this->unallocatedDeductedByCashCoupons;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->payerAccount) {
            $res['PayerAccount'] = $this->payerAccount;
        }
        if (null !== $this->monthGaapPretaxAmountLocal) {
            $res['MonthGaapPretaxAmountLocal'] = $this->monthGaapPretaxAmountLocal;
        }
        if (null !== $this->accountingUnit) {
            $res['AccountingUnit'] = $this->accountingUnit;
        }
        if (null !== $this->gaapPretaxAmountLocal) {
            $res['GaapPretaxAmountLocal'] = $this->gaapPretaxAmountLocal;
        }
        if (null !== $this->unallocatedDeductedByPrepaidCard) {
            $res['UnallocatedDeductedByPrepaidCard'] = $this->unallocatedDeductedByPrepaidCard;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->monthGaapPretaxGrossAmount) {
            $res['MonthGaapPretaxGrossAmount'] = $this->monthGaapPretaxGrossAmount;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->unallocatedPricingDiscount) {
            $res['UnallocatedPricingDiscount'] = $this->unallocatedPricingDiscount;
        }
        if (null !== $this->monthGaapDeductedByCashCoupons) {
            $res['MonthGaapDeductedByCashCoupons'] = $this->monthGaapDeductedByCashCoupons;
        }
        if (null !== $this->unallocatedPretaxGrossAmount) {
            $res['UnallocatedPretaxGrossAmount'] = $this->unallocatedPretaxGrossAmount;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->gaapDeductedByCoupons) {
            $res['GaapDeductedByCoupons'] = $this->gaapDeductedByCoupons;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->gaapDeductedByPrepaidCard) {
            $res['GaapDeductedByPrepaidCard'] = $this->gaapDeductedByPrepaidCard;
        }
        if (null !== $this->gaapPaymentAmount) {
            $res['GaapPaymentAmount'] = $this->gaapPaymentAmount;
        }
        if (null !== $this->unallocatedPretaxAmountLocal) {
            $res['UnallocatedPretaxAmountLocal'] = $this->unallocatedPretaxAmountLocal;
        }
        if (null !== $this->monthGaapPricingDiscount) {
            $res['MonthGaapPricingDiscount'] = $this->monthGaapPricingDiscount;
        }
        if (null !== $this->pricingDiscount) {
            $res['PricingDiscount'] = $this->pricingDiscount;
        }
        if (null !== $this->gaapPricingDiscount) {
            $res['GaapPricingDiscount'] = $this->gaapPricingDiscount;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->unallocatedDeductedByCoupons) {
            $res['UnallocatedDeductedByCoupons'] = $this->unallocatedDeductedByCoupons;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->unallocatedPretaxAmount) {
            $res['UnallocatedPretaxAmount'] = $this->unallocatedPretaxAmount;
        }
        if (null !== $this->gaapPretaxGrossAmount) {
            $res['GaapPretaxGrossAmount'] = $this->gaapPretaxGrossAmount;
        }
        if (null !== $this->unallocatedPaymentAmount) {
            $res['UnallocatedPaymentAmount'] = $this->unallocatedPaymentAmount;
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
        if (null !== $this->gaapPretaxAmount) {
            $res['GaapPretaxAmount'] = $this->gaapPretaxAmount;
        }
        if (null !== $this->monthGaapDeductedByCoupons) {
            $res['MonthGaapDeductedByCoupons'] = $this->monthGaapDeductedByCoupons;
        }
        if (null !== $this->monthGaapPaymentAmount) {
            $res['MonthGaapPaymentAmount'] = $this->monthGaapPaymentAmount;
        }
        if (null !== $this->usageEndDate) {
            $res['UsageEndDate'] = $this->usageEndDate;
        }
        if (null !== $this->usageStartDate) {
            $res['UsageStartDate'] = $this->usageStartDate;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['GaapDeductedByCashCoupons'])) {
            $model->gaapDeductedByCashCoupons = $map['GaapDeductedByCashCoupons'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['MonthGaapPretaxAmount'])) {
            $model->monthGaapPretaxAmount = $map['MonthGaapPretaxAmount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['MonthGaapDeductedByPrepaidCard'])) {
            $model->monthGaapDeductedByPrepaidCard = $map['MonthGaapDeductedByPrepaidCard'];
        }
        if (isset($map['UnallocatedDeductedByCashCoupons'])) {
            $model->unallocatedDeductedByCashCoupons = $map['UnallocatedDeductedByCashCoupons'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['PayerAccount'])) {
            $model->payerAccount = $map['PayerAccount'];
        }
        if (isset($map['MonthGaapPretaxAmountLocal'])) {
            $model->monthGaapPretaxAmountLocal = $map['MonthGaapPretaxAmountLocal'];
        }
        if (isset($map['AccountingUnit'])) {
            $model->accountingUnit = $map['AccountingUnit'];
        }
        if (isset($map['GaapPretaxAmountLocal'])) {
            $model->gaapPretaxAmountLocal = $map['GaapPretaxAmountLocal'];
        }
        if (isset($map['UnallocatedDeductedByPrepaidCard'])) {
            $model->unallocatedDeductedByPrepaidCard = $map['UnallocatedDeductedByPrepaidCard'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['MonthGaapPretaxGrossAmount'])) {
            $model->monthGaapPretaxGrossAmount = $map['MonthGaapPretaxGrossAmount'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['UnallocatedPricingDiscount'])) {
            $model->unallocatedPricingDiscount = $map['UnallocatedPricingDiscount'];
        }
        if (isset($map['MonthGaapDeductedByCashCoupons'])) {
            $model->monthGaapDeductedByCashCoupons = $map['MonthGaapDeductedByCashCoupons'];
        }
        if (isset($map['UnallocatedPretaxGrossAmount'])) {
            $model->unallocatedPretaxGrossAmount = $map['UnallocatedPretaxGrossAmount'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['GaapDeductedByCoupons'])) {
            $model->gaapDeductedByCoupons = $map['GaapDeductedByCoupons'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['GaapDeductedByPrepaidCard'])) {
            $model->gaapDeductedByPrepaidCard = $map['GaapDeductedByPrepaidCard'];
        }
        if (isset($map['GaapPaymentAmount'])) {
            $model->gaapPaymentAmount = $map['GaapPaymentAmount'];
        }
        if (isset($map['UnallocatedPretaxAmountLocal'])) {
            $model->unallocatedPretaxAmountLocal = $map['UnallocatedPretaxAmountLocal'];
        }
        if (isset($map['MonthGaapPricingDiscount'])) {
            $model->monthGaapPricingDiscount = $map['MonthGaapPricingDiscount'];
        }
        if (isset($map['PricingDiscount'])) {
            $model->pricingDiscount = $map['PricingDiscount'];
        }
        if (isset($map['GaapPricingDiscount'])) {
            $model->gaapPricingDiscount = $map['GaapPricingDiscount'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['UnallocatedDeductedByCoupons'])) {
            $model->unallocatedDeductedByCoupons = $map['UnallocatedDeductedByCoupons'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['UnallocatedPretaxAmount'])) {
            $model->unallocatedPretaxAmount = $map['UnallocatedPretaxAmount'];
        }
        if (isset($map['GaapPretaxGrossAmount'])) {
            $model->gaapPretaxGrossAmount = $map['GaapPretaxGrossAmount'];
        }
        if (isset($map['UnallocatedPaymentAmount'])) {
            $model->unallocatedPaymentAmount = $map['UnallocatedPaymentAmount'];
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
        if (isset($map['GaapPretaxAmount'])) {
            $model->gaapPretaxAmount = $map['GaapPretaxAmount'];
        }
        if (isset($map['MonthGaapDeductedByCoupons'])) {
            $model->monthGaapDeductedByCoupons = $map['MonthGaapDeductedByCoupons'];
        }
        if (isset($map['MonthGaapPaymentAmount'])) {
            $model->monthGaapPaymentAmount = $map['MonthGaapPaymentAmount'];
        }
        if (isset($map['UsageEndDate'])) {
            $model->usageEndDate = $map['UsageEndDate'];
        }
        if (isset($map['UsageStartDate'])) {
            $model->usageStartDate = $map['UsageStartDate'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
