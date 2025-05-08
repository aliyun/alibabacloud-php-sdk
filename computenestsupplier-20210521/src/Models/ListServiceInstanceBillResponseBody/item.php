<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceBillResponseBody;

use AlibabaCloud\Dara\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $billingItem;

    /**
     * @var string
     */
    public $billingItemCode;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $invoiceDiscount;

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
    public $pretaxAmount;

    /**
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $splitBillingCycle;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $usage;

    /**
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
        'serviceInstanceId' => 'ServiceInstanceId',
        'splitBillingCycle' => 'SplitBillingCycle',
        'subscriptionType' => 'SubscriptionType',
        'usage' => 'Usage',
        'usageUnit' => 'UsageUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
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
