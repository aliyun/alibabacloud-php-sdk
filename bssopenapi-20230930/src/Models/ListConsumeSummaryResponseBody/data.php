<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListConsumeSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $amountAfterCouponDeduction;

    /**
     * @var string
     */
    public $amountAfterPromotionDeduction;

    /**
     * @var string
     */
    public $amountAfterSavingPlanDeduction;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $billingFormula;

    /**
     * @var string
     */
    public $billingItemCode;

    /**
     * @var string
     */
    public $billingItemName;

    /**
     * @var string
     */
    public $billingMonth;

    /**
     * @var string
     */
    public $billingQuantity;

    /**
     * @var string
     */
    public $billingQuantityUnit;

    /**
     * @var string
     */
    public $chargeDuration;

    /**
     * @var string
     */
    public $chargeDurationUnit;

    /**
     * @var string
     */
    public $chargeType;

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
    public $consumeType;

    /**
     * @var string
     */
    public $couponAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $lineItemType;

    /**
     * @var string
     */
    public $listPrice;

    /**
     * @var string
     */
    public $listPriceUnit;

    /**
     * @var string
     */
    public $listUnitPrice;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $promotionAmount;

    /**
     * @var string
     */
    public $purchaseConfiguration;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $requireAmount;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccountId;

    /**
     * @var string
     */
    public $resourceOwnerAccountName;

    /**
     * @var string
     */
    public $resourcePurchaseAccountId;

    /**
     * @var string
     */
    public $resourcePurchaseAccountName;

    /**
     * @var string
     */
    public $savingPlanDeductAmount;

    /**
     * @var string
     */
    public $savingPlanDeductListPrice;

    /**
     * @var string
     */
    public $serviceEntity;
    protected $_name = [
        'amountAfterCouponDeduction' => 'AmountAfterCouponDeduction',
        'amountAfterPromotionDeduction' => 'AmountAfterPromotionDeduction',
        'amountAfterSavingPlanDeduction' => 'AmountAfterSavingPlanDeduction',
        'billingDate' => 'BillingDate',
        'billingFormula' => 'BillingFormula',
        'billingItemCode' => 'BillingItemCode',
        'billingItemName' => 'BillingItemName',
        'billingMonth' => 'BillingMonth',
        'billingQuantity' => 'BillingQuantity',
        'billingQuantityUnit' => 'BillingQuantityUnit',
        'chargeDuration' => 'ChargeDuration',
        'chargeDurationUnit' => 'ChargeDurationUnit',
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'consumeType' => 'ConsumeType',
        'couponAmount' => 'CouponAmount',
        'currency' => 'Currency',
        'hashKey' => 'HashKey',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'lineItemType' => 'LineItemType',
        'listPrice' => 'ListPrice',
        'listPriceUnit' => 'ListPriceUnit',
        'listUnitPrice' => 'ListUnitPrice',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'promotionAmount' => 'PromotionAmount',
        'purchaseConfiguration' => 'PurchaseConfiguration',
        'regionCode' => 'RegionCode',
        'regionName' => 'RegionName',
        'requireAmount' => 'RequireAmount',
        'resourceId' => 'ResourceId',
        'resourceOwnerAccountId' => 'ResourceOwnerAccountId',
        'resourceOwnerAccountName' => 'ResourceOwnerAccountName',
        'resourcePurchaseAccountId' => 'ResourcePurchaseAccountId',
        'resourcePurchaseAccountName' => 'ResourcePurchaseAccountName',
        'savingPlanDeductAmount' => 'SavingPlanDeductAmount',
        'savingPlanDeductListPrice' => 'SavingPlanDeductListPrice',
        'serviceEntity' => 'ServiceEntity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amountAfterCouponDeduction) {
            $res['AmountAfterCouponDeduction'] = $this->amountAfterCouponDeduction;
        }

        if (null !== $this->amountAfterPromotionDeduction) {
            $res['AmountAfterPromotionDeduction'] = $this->amountAfterPromotionDeduction;
        }

        if (null !== $this->amountAfterSavingPlanDeduction) {
            $res['AmountAfterSavingPlanDeduction'] = $this->amountAfterSavingPlanDeduction;
        }

        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }

        if (null !== $this->billingFormula) {
            $res['BillingFormula'] = $this->billingFormula;
        }

        if (null !== $this->billingItemCode) {
            $res['BillingItemCode'] = $this->billingItemCode;
        }

        if (null !== $this->billingItemName) {
            $res['BillingItemName'] = $this->billingItemName;
        }

        if (null !== $this->billingMonth) {
            $res['BillingMonth'] = $this->billingMonth;
        }

        if (null !== $this->billingQuantity) {
            $res['BillingQuantity'] = $this->billingQuantity;
        }

        if (null !== $this->billingQuantityUnit) {
            $res['BillingQuantityUnit'] = $this->billingQuantityUnit;
        }

        if (null !== $this->chargeDuration) {
            $res['ChargeDuration'] = $this->chargeDuration;
        }

        if (null !== $this->chargeDurationUnit) {
            $res['ChargeDurationUnit'] = $this->chargeDurationUnit;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }

        if (null !== $this->couponAmount) {
            $res['CouponAmount'] = $this->couponAmount;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->lineItemType) {
            $res['LineItemType'] = $this->lineItemType;
        }

        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }

        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
        }

        if (null !== $this->listUnitPrice) {
            $res['ListUnitPrice'] = $this->listUnitPrice;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->promotionAmount) {
            $res['PromotionAmount'] = $this->promotionAmount;
        }

        if (null !== $this->purchaseConfiguration) {
            $res['PurchaseConfiguration'] = $this->purchaseConfiguration;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->requireAmount) {
            $res['RequireAmount'] = $this->requireAmount;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerAccountId) {
            $res['ResourceOwnerAccountId'] = $this->resourceOwnerAccountId;
        }

        if (null !== $this->resourceOwnerAccountName) {
            $res['ResourceOwnerAccountName'] = $this->resourceOwnerAccountName;
        }

        if (null !== $this->resourcePurchaseAccountId) {
            $res['ResourcePurchaseAccountId'] = $this->resourcePurchaseAccountId;
        }

        if (null !== $this->resourcePurchaseAccountName) {
            $res['ResourcePurchaseAccountName'] = $this->resourcePurchaseAccountName;
        }

        if (null !== $this->savingPlanDeductAmount) {
            $res['SavingPlanDeductAmount'] = $this->savingPlanDeductAmount;
        }

        if (null !== $this->savingPlanDeductListPrice) {
            $res['SavingPlanDeductListPrice'] = $this->savingPlanDeductListPrice;
        }

        if (null !== $this->serviceEntity) {
            $res['ServiceEntity'] = $this->serviceEntity;
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
        if (isset($map['AmountAfterCouponDeduction'])) {
            $model->amountAfterCouponDeduction = $map['AmountAfterCouponDeduction'];
        }

        if (isset($map['AmountAfterPromotionDeduction'])) {
            $model->amountAfterPromotionDeduction = $map['AmountAfterPromotionDeduction'];
        }

        if (isset($map['AmountAfterSavingPlanDeduction'])) {
            $model->amountAfterSavingPlanDeduction = $map['AmountAfterSavingPlanDeduction'];
        }

        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }

        if (isset($map['BillingFormula'])) {
            $model->billingFormula = $map['BillingFormula'];
        }

        if (isset($map['BillingItemCode'])) {
            $model->billingItemCode = $map['BillingItemCode'];
        }

        if (isset($map['BillingItemName'])) {
            $model->billingItemName = $map['BillingItemName'];
        }

        if (isset($map['BillingMonth'])) {
            $model->billingMonth = $map['BillingMonth'];
        }

        if (isset($map['BillingQuantity'])) {
            $model->billingQuantity = $map['BillingQuantity'];
        }

        if (isset($map['BillingQuantityUnit'])) {
            $model->billingQuantityUnit = $map['BillingQuantityUnit'];
        }

        if (isset($map['ChargeDuration'])) {
            $model->chargeDuration = $map['ChargeDuration'];
        }

        if (isset($map['ChargeDurationUnit'])) {
            $model->chargeDurationUnit = $map['ChargeDurationUnit'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }

        if (isset($map['CouponAmount'])) {
            $model->couponAmount = $map['CouponAmount'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['LineItemType'])) {
            $model->lineItemType = $map['LineItemType'];
        }

        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }

        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
        }

        if (isset($map['ListUnitPrice'])) {
            $model->listUnitPrice = $map['ListUnitPrice'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['PromotionAmount'])) {
            $model->promotionAmount = $map['PromotionAmount'];
        }

        if (isset($map['PurchaseConfiguration'])) {
            $model->purchaseConfiguration = $map['PurchaseConfiguration'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RequireAmount'])) {
            $model->requireAmount = $map['RequireAmount'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerAccountId'])) {
            $model->resourceOwnerAccountId = $map['ResourceOwnerAccountId'];
        }

        if (isset($map['ResourceOwnerAccountName'])) {
            $model->resourceOwnerAccountName = $map['ResourceOwnerAccountName'];
        }

        if (isset($map['ResourcePurchaseAccountId'])) {
            $model->resourcePurchaseAccountId = $map['ResourcePurchaseAccountId'];
        }

        if (isset($map['ResourcePurchaseAccountName'])) {
            $model->resourcePurchaseAccountName = $map['ResourcePurchaseAccountName'];
        }

        if (isset($map['SavingPlanDeductAmount'])) {
            $model->savingPlanDeductAmount = $map['SavingPlanDeductAmount'];
        }

        if (isset($map['SavingPlanDeductListPrice'])) {
            $model->savingPlanDeductListPrice = $map['SavingPlanDeductListPrice'];
        }

        if (isset($map['ServiceEntity'])) {
            $model->serviceEntity = $map['ServiceEntity'];
        }

        return $model;
    }
}
