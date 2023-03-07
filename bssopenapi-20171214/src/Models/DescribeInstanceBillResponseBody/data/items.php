<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceBillResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The amount deducted with credit refund.
     *
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @description The ID of the account to which the bill belongs.
     *
     * @example 122
     *
     * @var string
     */
    public $billAccountID;

    /**
     * @description The name of the account to which the bill belongs.
     *
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @description The billing date. This parameter is returned only if the Granularity parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example 2020-03-20
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The billable item. A value is returned only if the IsBillingItem parameter is set to true.
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
     * @description The billing method.
     *
     * @example Other
     *
     * @var string
     */
    public $billingType;

    /**
     * @description The type of business.
     *
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The amount paid in cash. The amount deducted with credit refund is not included.
     *
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @description The code of the commodity. The code is the same as that in Cost Center.
     *
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The cost center.
     *
     * @example Not allocated
     *
     * @var string
     */
    public $costUnit;

    /**
     * @description The type of currency. Valid values:
     *
     *   CNY
     *   USD
     *   JPY
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount deducted with vouchers.
     *
     * @example 0.1
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description The amount deducted with coupons.
     *
     * @example 0.1
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description The amount deducted with prepaid cards.
     *
     * @example 0.1
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description The amount deducted with resource plans. This parameter is valid only when the isBillingItem parameter is set to true.
     *
     * @example 0.1
     *
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @description The configurations of the instance.
     *
     * @example CPU：12
     *
     * @var string
     */
    public $instanceConfig;

    /**
     * @description The ID of the instance.
     *
     * @example i-dadada
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The type of the instance.
     *
     * @example ecs.sn1ne.3xlarge
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The public IP address.
     *
     * @example 34.xx.x.x
     *
     * @var string
     */
    public $internetIP;

    /**
     * @description The private IP address.
     *
     * @example 192.xx.xx.xx
     *
     * @var string
     */
    public $intranetIP;

    /**
     * @description The discount amount.
     *
     * @example 0.1
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description The type of the bill.
     *
     *   SubscriptionOrder: the subscription bill.
     *   PayAsYouGoBill: the pay-as-you-go bill,
     *   Refund: the refund.
     *   Adjustment: the adjustment bill.
     *
     * @example PayAsYouGoBill
     *
     * @var string
     */
    public $item;

    /**
     * @description The name of the project.
     *
     * @example iZ28bycvyb4Z
     *
     * @var string
     */
    public $itemName;

    /**
     * @description The unit price of the service. This parameter is valid only when the isBillingItem parameter is set to true.
     *
     * @example 100
     *
     * @var string
     */
    public $listPrice;

    /**
     * @description The unit of the unit price. This parameter is valid only when the isBillingItem parameter is set to true.
     *
     * @example CNY
     *
     * @var string
     */
    public $listPriceUnit;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The unsettled amount.
     *
     * @example 0.1
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description The ID of the account that owns the resource. This parameter is returned in multi-account payment scenario.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The amount paid in cash. The amount deducted with credit refund is not included.
     *
     * @example 0.1
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description The code of the service. The code is the same as that in Cost Center.
     *
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @description The pretax amount.
     *
     * @example 0.1
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description The pretax gross amount.
     *
     * @example 0.1
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The details of the service.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $productDetail;

    /**
     * @description The name of the service.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource group.
     *
     * @example Default resource group
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The service duration.
     *
     * @example 3600
     *
     * @var string
     */
    public $servicePeriod;

    /**
     * @description The unit of the service duration.
     *
     * @example Second
     *
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method.
     *   PayAsYouGo: the pay-as-you-go billing method.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The tag of the resource.
     *
     * @example key:testKey value:testValue; key:testKey1 value:testValues1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The usage of the service. This parameter is valid only when the isBillingItem parameter is set to true. The usage is the total usage in all bills in the billing cycle, not the amount that you purchase. For example, if 1 GB of storage is used and bills are generated every hour, the usage is 1 GB per hour. In this case, the usage is 24 GB per day.
     *
     * @example 100
     *
     * @var string
     */
    public $usage;

    /**
     * @description The unit of usage. This parameter is valid only when the isBillingItem parameter is set to true.
     *
     * @example GB
     *
     * @var string
     */
    public $usageUnit;

    /**
     * @description The ID of the zone.
     *
     * @example Hangzhou Zone B
     *
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
