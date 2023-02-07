<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @example 185xxxx3489
     *
     * @var string
     */
    public $billAccountID;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @example 2020-01-20
     *
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $billingItem;

    /**
     * @example disk
     *
     * @var string
     */
    public $billingItemCode;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $costUnit;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @example CPU:12
     *
     * @var string
     */
    public $instanceConfig;

    /**
     * @example i-kjhdskjgshfdlkjfdh
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example ecs.sn1ne.3xlarge
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example 34.xx.x.x
     *
     * @var string
     */
    public $internetIP;

    /**
     * @example 192.xx.xx.xx
     *
     * @var string
     */
    public $intranetIP;

    /**
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @example PayAsYouGoBill
     *
     * @var string
     */
    public $item;

    /**
     * @example iZ28bycvyb4Z
     *
     * @var string
     */
    public $itemName;

    /**
     * @example 0.12
     *
     * @var string
     */
    public $listPrice;

    /**
     * @var string
     */
    public $listPriceUnit;

    /**
     * @example nick
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @example 169***013
     *
     * @var string
     */
    public $ownerID;

    /**
     * @example 0
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @example 0
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @example rds
     *
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
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @example 20
     *
     * @var string
     */
    public $servicePeriod;

    /**
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @example 12**122
     *
     * @var string
     */
    public $splitAccountID;

    /**
     * @example test**1122
     *
     * @var string
     */
    public $splitAccountName;

    /**
     * @example 2021-06
     *
     * @var string
     */
    public $splitBillingCycle;

    /**
     * @example 2021-06-01
     *
     * @var string
     */
    public $splitBillingDate;

    /**
     * @example rds
     *
     * @var string
     */
    public $splitCommodityCode;

    /**
     * @example i-28bycvyb4
     *
     * @var string
     */
    public $splitItemID;

    /**
     * @example iZ28bycvyb4Z
     *
     * @var string
     */
    public $splitItemName;

    /**
     * @var string
     */
    public $splitProductDetail;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example key:testKey value:testValue; key:testKey1 value:testValues1
     *
     * @var string
     */
    public $tag;

    /**
     * @example 100
     *
     * @var string
     */
    public $usage;

    /**
     * @example GB
     *
     * @var string
     */
    public $usageUnit;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'adjustAmount'              => 'AdjustAmount',
        'billAccountID'             => 'BillAccountID',
        'billAccountName'           => 'BillAccountName',
        'billingDate'               => 'BillingDate',
        'billingItem'               => 'BillingItem',
        'billingItemCode'           => 'BillingItemCode',
        'billingType'               => 'BillingType',
        'bizType'                   => 'BizType',
        'cashAmount'                => 'CashAmount',
        'commodityCode'             => 'CommodityCode',
        'costUnit'                  => 'CostUnit',
        'currency'                  => 'Currency',
        'deductedByCashCoupons'     => 'DeductedByCashCoupons',
        'deductedByCoupons'         => 'DeductedByCoupons',
        'deductedByPrepaidCard'     => 'DeductedByPrepaidCard',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'instanceConfig'            => 'InstanceConfig',
        'instanceID'                => 'InstanceID',
        'instanceSpec'              => 'InstanceSpec',
        'internetIP'                => 'InternetIP',
        'intranetIP'                => 'IntranetIP',
        'invoiceDiscount'           => 'InvoiceDiscount',
        'item'                      => 'Item',
        'itemName'                  => 'ItemName',
        'listPrice'                 => 'ListPrice',
        'listPriceUnit'             => 'ListPriceUnit',
        'nickName'                  => 'NickName',
        'outstandingAmount'         => 'OutstandingAmount',
        'ownerID'                   => 'OwnerID',
        'paymentAmount'             => 'PaymentAmount',
        'pipCode'                   => 'PipCode',
        'pretaxAmount'              => 'PretaxAmount',
        'pretaxGrossAmount'         => 'PretaxGrossAmount',
        'productCode'               => 'ProductCode',
        'productDetail'             => 'ProductDetail',
        'productName'               => 'ProductName',
        'productType'               => 'ProductType',
        'region'                    => 'Region',
        'resourceGroup'             => 'ResourceGroup',
        'servicePeriod'             => 'ServicePeriod',
        'servicePeriodUnit'         => 'ServicePeriodUnit',
        'splitAccountID'            => 'SplitAccountID',
        'splitAccountName'          => 'SplitAccountName',
        'splitBillingCycle'         => 'SplitBillingCycle',
        'splitBillingDate'          => 'SplitBillingDate',
        'splitCommodityCode'        => 'SplitCommodityCode',
        'splitItemID'               => 'SplitItemID',
        'splitItemName'             => 'SplitItemName',
        'splitProductDetail'        => 'SplitProductDetail',
        'subscriptionType'          => 'SubscriptionType',
        'tag'                       => 'Tag',
        'usage'                     => 'Usage',
        'usageUnit'                 => 'UsageUnit',
        'zone'                      => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustAmount) {
            $res['AdjustAmount'] = $this->adjustAmount;
        }
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
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
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
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
        if (null !== $this->deductedByResourcePackage) {
            $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        }
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = $this->instanceConfig;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
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
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
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
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->servicePeriod) {
            $res['ServicePeriod'] = $this->servicePeriod;
        }
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->splitAccountID) {
            $res['SplitAccountID'] = $this->splitAccountID;
        }
        if (null !== $this->splitAccountName) {
            $res['SplitAccountName'] = $this->splitAccountName;
        }
        if (null !== $this->splitBillingCycle) {
            $res['SplitBillingCycle'] = $this->splitBillingCycle;
        }
        if (null !== $this->splitBillingDate) {
            $res['SplitBillingDate'] = $this->splitBillingDate;
        }
        if (null !== $this->splitCommodityCode) {
            $res['SplitCommodityCode'] = $this->splitCommodityCode;
        }
        if (null !== $this->splitItemID) {
            $res['SplitItemID'] = $this->splitItemID;
        }
        if (null !== $this->splitItemName) {
            $res['SplitItemName'] = $this->splitItemName;
        }
        if (null !== $this->splitProductDetail) {
            $res['SplitProductDetail'] = $this->splitProductDetail;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['AdjustAmount'])) {
            $model->adjustAmount = $map['AdjustAmount'];
        }
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
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
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
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
        if (isset($map['DeductedByResourcePackage'])) {
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if (isset($map['InstanceConfig'])) {
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
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
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ServicePeriod'])) {
            $model->servicePeriod = $map['ServicePeriod'];
        }
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['SplitAccountID'])) {
            $model->splitAccountID = $map['SplitAccountID'];
        }
        if (isset($map['SplitAccountName'])) {
            $model->splitAccountName = $map['SplitAccountName'];
        }
        if (isset($map['SplitBillingCycle'])) {
            $model->splitBillingCycle = $map['SplitBillingCycle'];
        }
        if (isset($map['SplitBillingDate'])) {
            $model->splitBillingDate = $map['SplitBillingDate'];
        }
        if (isset($map['SplitCommodityCode'])) {
            $model->splitCommodityCode = $map['SplitCommodityCode'];
        }
        if (isset($map['SplitItemID'])) {
            $model->splitItemID = $map['SplitItemID'];
        }
        if (isset($map['SplitItemName'])) {
            $model->splitItemName = $map['SplitItemName'];
        }
        if (isset($map['SplitProductDetail'])) {
            $model->splitProductDetail = $map['SplitProductDetail'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
