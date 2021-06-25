<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $splitAccountID;

    /**
     * @var string
     */
    public $billAccountName;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $intranetIP;

    /**
     * @var string
     */
    public $usageUnit;

    /**
     * @var string
     */
    public $splitCommodityCode;

    /**
     * @var string
     */
    public $billAccountID;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @var float
     */
    public $paymentAmount;

    /**
     * @var string
     */
    public $splitBillingCycle;

    /**
     * @var string
     */
    public $servicePeriod;

    /**
     * @var string
     */
    public $splitItemName;

    /**
     * @var string
     */
    public $listPrice;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $instanceConfig;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $internetIP;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $splitItemID;

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
    public $billingItem;

    /**
     * @var string
     */
    public $costUnit;

    /**
     * @var string
     */
    public $listPriceUnit;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @var string
     */
    public $splitBillingDate;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $splitProductDetail;

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
    public $invoiceDiscount;

    /**
     * @var string
     */
    public $splitAccountName;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'splitAccountID'            => 'SplitAccountID',
        'billAccountName'           => 'BillAccountName',
        'subscriptionType'          => 'SubscriptionType',
        'instanceSpec'              => 'InstanceSpec',
        'deductedByCoupons'         => 'DeductedByCoupons',
        'region'                    => 'Region',
        'outstandingAmount'         => 'OutstandingAmount',
        'pipCode'                   => 'PipCode',
        'commodityCode'             => 'CommodityCode',
        'nickName'                  => 'NickName',
        'productDetail'             => 'ProductDetail',
        'usage'                     => 'Usage',
        'intranetIP'                => 'IntranetIP',
        'usageUnit'                 => 'UsageUnit',
        'splitCommodityCode'        => 'SplitCommodityCode',
        'billAccountID'             => 'BillAccountID',
        'productType'               => 'ProductType',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'paymentAmount'             => 'PaymentAmount',
        'splitBillingCycle'         => 'SplitBillingCycle',
        'servicePeriod'             => 'ServicePeriod',
        'splitItemName'             => 'SplitItemName',
        'listPrice'                 => 'ListPrice',
        'zone'                      => 'Zone',
        'pretaxGrossAmount'         => 'PretaxGrossAmount',
        'instanceConfig'            => 'InstanceConfig',
        'billingDate'               => 'BillingDate',
        'internetIP'                => 'InternetIP',
        'item'                      => 'Item',
        'splitItemID'               => 'SplitItemID',
        'instanceID'                => 'InstanceID',
        'tag'                       => 'Tag',
        'currency'                  => 'Currency',
        'deductedByCashCoupons'     => 'DeductedByCashCoupons',
        'bizType'                   => 'BizType',
        'billingItem'               => 'BillingItem',
        'costUnit'                  => 'CostUnit',
        'listPriceUnit'             => 'ListPriceUnit',
        'resourceGroup'             => 'ResourceGroup',
        'pretaxAmount'              => 'PretaxAmount',
        'servicePeriodUnit'         => 'ServicePeriodUnit',
        'splitBillingDate'          => 'SplitBillingDate',
        'productName'               => 'ProductName',
        'splitProductDetail'        => 'SplitProductDetail',
        'ownerID'                   => 'OwnerID',
        'deductedByPrepaidCard'     => 'DeductedByPrepaidCard',
        'invoiceDiscount'           => 'InvoiceDiscount',
        'splitAccountName'          => 'SplitAccountName',
        'billingType'               => 'BillingType',
        'productCode'               => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->splitAccountID) {
            $res['SplitAccountID'] = $this->splitAccountID;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->intranetIP) {
            $res['IntranetIP'] = $this->intranetIP;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }
        if (null !== $this->splitCommodityCode) {
            $res['SplitCommodityCode'] = $this->splitCommodityCode;
        }
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->deductedByResourcePackage) {
            $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->splitBillingCycle) {
            $res['SplitBillingCycle'] = $this->splitBillingCycle;
        }
        if (null !== $this->servicePeriod) {
            $res['ServicePeriod'] = $this->servicePeriod;
        }
        if (null !== $this->splitItemName) {
            $res['SplitItemName'] = $this->splitItemName;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = $this->instanceConfig;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->internetIP) {
            $res['InternetIP'] = $this->internetIP;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->splitItemID) {
            $res['SplitItemID'] = $this->splitItemID;
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
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->billingItem) {
            $res['BillingItem'] = $this->billingItem;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
        }
        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->splitBillingDate) {
            $res['SplitBillingDate'] = $this->splitBillingDate;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->splitProductDetail) {
            $res['SplitProductDetail'] = $this->splitProductDetail;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->splitAccountName) {
            $res['SplitAccountName'] = $this->splitAccountName;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SplitAccountID'])) {
            $model->splitAccountID = $map['SplitAccountID'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['IntranetIP'])) {
            $model->intranetIP = $map['IntranetIP'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }
        if (isset($map['SplitCommodityCode'])) {
            $model->splitCommodityCode = $map['SplitCommodityCode'];
        }
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['DeductedByResourcePackage'])) {
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['SplitBillingCycle'])) {
            $model->splitBillingCycle = $map['SplitBillingCycle'];
        }
        if (isset($map['ServicePeriod'])) {
            $model->servicePeriod = $map['ServicePeriod'];
        }
        if (isset($map['SplitItemName'])) {
            $model->splitItemName = $map['SplitItemName'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['InstanceConfig'])) {
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['InternetIP'])) {
            $model->internetIP = $map['InternetIP'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['SplitItemID'])) {
            $model->splitItemID = $map['SplitItemID'];
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
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BillingItem'])) {
            $model->billingItem = $map['BillingItem'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
        }
        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['SplitBillingDate'])) {
            $model->splitBillingDate = $map['SplitBillingDate'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SplitProductDetail'])) {
            $model->splitProductDetail = $map['SplitProductDetail'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['SplitAccountName'])) {
            $model->splitAccountName = $map['SplitAccountName'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
