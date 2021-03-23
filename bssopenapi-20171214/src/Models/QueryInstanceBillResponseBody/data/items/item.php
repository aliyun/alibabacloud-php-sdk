<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $costUnit;

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
    public $subscriptionType;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var string
     */
    public $billingItem;

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
    public $usage;

    /**
     * @var string
     */
    public $usageUnit;

    /**
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @var float
     */
    public $paymentAmount;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $instanceConfig;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $internetIP;

    /**
     * @var string
     */
    public $intranetIP;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $servicePeriod;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var string
     */
    public $commodityCode;
    protected $_name = [
        'instanceID'                => 'InstanceID',
        'billingType'               => 'BillingType',
        'costUnit'                  => 'CostUnit',
        'productCode'               => 'ProductCode',
        'productType'               => 'ProductType',
        'subscriptionType'          => 'SubscriptionType',
        'productName'               => 'ProductName',
        'productDetail'             => 'ProductDetail',
        'ownerID'                   => 'OwnerID',
        'billingItem'               => 'BillingItem',
        'listPrice'                 => 'ListPrice',
        'listPriceUnit'             => 'ListPriceUnit',
        'usage'                     => 'Usage',
        'usageUnit'                 => 'UsageUnit',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'pretaxGrossAmount'         => 'PretaxGrossAmount',
        'invoiceDiscount'           => 'InvoiceDiscount',
        'deductedByCoupons'         => 'DeductedByCoupons',
        'pretaxAmount'              => 'PretaxAmount',
        'deductedByCashCoupons'     => 'DeductedByCashCoupons',
        'deductedByPrepaidCard'     => 'DeductedByPrepaidCard',
        'paymentAmount'             => 'PaymentAmount',
        'outstandingAmount'         => 'OutstandingAmount',
        'currency'                  => 'Currency',
        'nickName'                  => 'NickName',
        'resourceGroup'             => 'ResourceGroup',
        'tag'                       => 'Tag',
        'instanceConfig'            => 'InstanceConfig',
        'instanceSpec'              => 'InstanceSpec',
        'internetIP'                => 'InternetIP',
        'intranetIP'                => 'IntranetIP',
        'region'                    => 'Region',
        'zone'                      => 'Zone',
        'item'                      => 'Item',
        'servicePeriod'             => 'ServicePeriod',
        'billingDate'               => 'BillingDate',
        'servicePeriodUnit'         => 'ServicePeriodUnit',
        'pipCode'                   => 'PipCode',
        'commodityCode'             => 'CommodityCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->billingItem) {
            $res['BillingItem'] = $this->billingItem;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }
        if (null !== $this->deductedByResourcePackage) {
            $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = $this->instanceConfig;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->internetIP) {
            $res['InternetIP'] = $this->internetIP;
        }
        if (null !== $this->intranetIP) {
            $res['IntranetIP'] = $this->intranetIP;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->servicePeriod) {
            $res['ServicePeriod'] = $this->servicePeriod;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
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
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['BillingItem'])) {
            $model->billingItem = $map['BillingItem'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }
        if (isset($map['DeductedByResourcePackage'])) {
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['InstanceConfig'])) {
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['InternetIP'])) {
            $model->internetIP = $map['InternetIP'];
        }
        if (isset($map['IntranetIP'])) {
            $model->intranetIP = $map['IntranetIP'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['ServicePeriod'])) {
            $model->servicePeriod = $map['ServicePeriod'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        return $model;
    }
}
