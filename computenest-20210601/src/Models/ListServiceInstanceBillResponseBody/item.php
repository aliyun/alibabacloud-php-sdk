<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The billing cycle. Format: YYYY-MM.
     *
     * @example 2025-02
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The billing date. This parameter is required only if the **Granularity** parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example 2024-10-23
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The billable item.
     *
     * @example Bandwidth
     *
     * @var string
     */
    public $billingItem;

    /**
     * @description The code of the billable item.
     *
     * @example disk
     *
     * @var string
     */
    public $billingItemCode;

    /**
     * @description The currency unit.
     *
     *   China site: **CNY**.
     *   International site: **USD**.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount deducted with resource plans.
     *
     * @example 0
     *
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @description The ID of the instance.
     *
     * @example rm-bp1z88pb48487907u
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The discount amount.
     *
     * @example 0
     *
     * @var string
     */
    public $invoiceDiscount;

    /**
     * @description The unit price.
     *
     * @example 0.12
     *
     * @var string
     */
    public $listPrice;

    /**
     * @description The unit of the unit price.
     *
     * @example CNY/GB
     *
     * @var string
     */
    public $listPriceUnit;

    /**
     * @description The pretax amount.
     *
     * @example 0
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @description The pretax gross amount.
     *
     * @example 0
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @description The code of the service.
     *
     * @example sls
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The specific service resource.
     *
     * @example sls
     *
     * @var string
     */
    public $productDetail;

    /**
     * @description The name of the cloud service or the name of the service-linked role with which the cloud service is associated.
     *
     * @example NLB
     *
     * @var string
     */
    public $productName;

    /**
     * @description The billing cycle in which the bill is split.
     *
     * @example 2021-07
     *
     * @var string
     */
    public $splitBillingCycle;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method.
     *   PayAsYouGo: the pay-as-you-go billing method.
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The amount of resource usage.
     *
     * @example {\\"EmbeddingTokens\\": 314}
     *
     * @var string
     */
    public $usage;

    /**
     * @description The unit of usage.
     *
     * @example GB
     *
     * @var string
     */
    public $usageUnit;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'billingDate' => 'BillingDate',
        'billingItem' => 'BillingItem',
        'billingItemCode' => 'BillingItemCode',
        'currency' => 'Currency',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'instanceID' => 'InstanceID',
        'invoiceDiscount' => 'InvoiceDiscount',
        'listPrice' => 'ListPrice',
        'listPriceUnit' => 'ListPriceUnit',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode' => 'ProductCode',
        'productDetail' => 'ProductDetail',
        'productName' => 'ProductName',
        'splitBillingCycle' => 'SplitBillingCycle',
        'subscriptionType' => 'SubscriptionType',
        'usage' => 'Usage',
        'usageUnit' => 'UsageUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->billingItem) {
            $res['BillingItem'] = $this->billingItem;
        }
        if (null !== $this->billingItemCode) {
            $res['BillingItemCode'] = $this->billingItemCode;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductedByResourcePackage) {
            $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
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
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->splitBillingCycle) {
            $res['SplitBillingCycle'] = $this->splitBillingCycle;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['BillingItem'])) {
            $model->billingItem = $map['BillingItem'];
        }
        if (isset($map['BillingItemCode'])) {
            $model->billingItemCode = $map['BillingItemCode'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductedByResourcePackage'])) {
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
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
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SplitBillingCycle'])) {
            $model->splitBillingCycle = $map['SplitBillingCycle'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }

        return $model;
    }
}
