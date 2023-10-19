<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2022-10
     *
     * @var string
     */
    public $amortizationPeriod;

    /**
     * @example 2022-10-10
     *
     * @var string
     */
    public $amortizationPeriodDay;

    /**
     * @example amortized
     *
     * @var string
     */
    public $amortizationStatus;

    /**
     * @example 185xxxxx489
     *
     * @var int
     */
    public $billAccountID;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billAccountName;

    /**
     * @example 185xxxxx489
     *
     * @var int
     */
    public $billOwnerID;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $billOwnerName;

    /**
     * @example trusteeship
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 2022-10
     *
     * @var string
     */
    public $consumePeriod;

    /**
     * @var string
     */
    public $costUnit;

    /**
     * @example 1234
     *
     * @var string
     */
    public $costUnitCode;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationDeductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationInvoiceDiscount;

    /**
     * @example 10
     *
     * @var float
     */
    public $currentAmortizationPretaxAmount;

    /**
     * @example 10
     *
     * @var float
     */
    public $currentAmortizationPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationRoundDownDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

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
     * @example 100
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @example 100
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
     * @example rds
     *
     * @var string
     */
    public $productDetailCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example spn-001
     *
     * @var string
     */
    public $referFrInstanceID;

    /**
     * @example 185xxxxx489
     *
     * @var string
     */
    public $referFrOwnerID;

    /**
     * @example savingplan_common_public_cn
     *
     * @var string
     */
    public $referFrProductDetailCode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @example 0
     *
     * @var float
     */
    public $roundDownDiscount;

    /**
     * @example 12@test.com
     *
     * @var string
     */
    public $splitAccountName;

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
     * @example rds
     *
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
     * @example 0
     *
     * @var float
     */
    public $unusedAmortizationDeductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $unusedAmortizationInvoiceDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $unusedAmortizationPretaxAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $unusedAmortizationPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $unusedAmortizationRoundDownDiscount;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'amortizationPeriod'                   => 'AmortizationPeriod',
        'amortizationPeriodDay'                => 'AmortizationPeriodDay',
        'amortizationStatus'                   => 'AmortizationStatus',
        'billAccountID'                        => 'BillAccountID',
        'billAccountName'                      => 'BillAccountName',
        'billOwnerID'                          => 'BillOwnerID',
        'billOwnerName'                        => 'BillOwnerName',
        'bizType'                              => 'BizType',
        'consumePeriod'                        => 'ConsumePeriod',
        'costUnit'                             => 'CostUnit',
        'costUnitCode'                         => 'CostUnitCode',
        'currentAmortizationDeductedByCoupons' => 'CurrentAmortizationDeductedByCoupons',
        'currentAmortizationInvoiceDiscount'   => 'CurrentAmortizationInvoiceDiscount',
        'currentAmortizationPretaxAmount'      => 'CurrentAmortizationPretaxAmount',
        'currentAmortizationPretaxGrossAmount' => 'CurrentAmortizationPretaxGrossAmount',
        'currentAmortizationRoundDownDiscount' => 'CurrentAmortizationRoundDownDiscount',
        'deductedByCoupons'                    => 'DeductedByCoupons',
        'instanceConfig'                       => 'InstanceConfig',
        'instanceID'                           => 'InstanceID',
        'internetIP'                           => 'InternetIP',
        'intranetIP'                           => 'IntranetIP',
        'invoiceDiscount'                      => 'InvoiceDiscount',
        'pretaxAmount'                         => 'PretaxAmount',
        'pretaxGrossAmount'                    => 'PretaxGrossAmount',
        'productCode'                          => 'ProductCode',
        'productDetail'                        => 'ProductDetail',
        'productDetailCode'                    => 'ProductDetailCode',
        'productName'                          => 'ProductName',
        'referFrInstanceID'                    => 'ReferFrInstanceID',
        'referFrOwnerID'                       => 'ReferFrOwnerID',
        'referFrProductDetailCode'             => 'ReferFrProductDetailCode',
        'region'                               => 'Region',
        'resourceGroup'                        => 'ResourceGroup',
        'roundDownDiscount'                    => 'RoundDownDiscount',
        'splitAccountName'                     => 'SplitAccountName',
        'splitItemID'                          => 'SplitItemID',
        'splitItemName'                        => 'SplitItemName',
        'splitProductDetail'                   => 'SplitProductDetail',
        'subscriptionType'                     => 'SubscriptionType',
        'tag'                                  => 'Tag',
        'unusedAmortizationDeductedByCoupons'  => 'UnusedAmortizationDeductedByCoupons',
        'unusedAmortizationInvoiceDiscount'    => 'UnusedAmortizationInvoiceDiscount',
        'unusedAmortizationPretaxAmount'       => 'UnusedAmortizationPretaxAmount',
        'unusedAmortizationPretaxGrossAmount'  => 'UnusedAmortizationPretaxGrossAmount',
        'unusedAmortizationRoundDownDiscount'  => 'UnusedAmortizationRoundDownDiscount',
        'zone'                                 => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amortizationPeriod) {
            $res['AmortizationPeriod'] = $this->amortizationPeriod;
        }
        if (null !== $this->amortizationPeriodDay) {
            $res['AmortizationPeriodDay'] = $this->amortizationPeriodDay;
        }
        if (null !== $this->amortizationStatus) {
            $res['AmortizationStatus'] = $this->amortizationStatus;
        }
        if (null !== $this->billAccountID) {
            $res['BillAccountID'] = $this->billAccountID;
        }
        if (null !== $this->billAccountName) {
            $res['BillAccountName'] = $this->billAccountName;
        }
        if (null !== $this->billOwnerID) {
            $res['BillOwnerID'] = $this->billOwnerID;
        }
        if (null !== $this->billOwnerName) {
            $res['BillOwnerName'] = $this->billOwnerName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->consumePeriod) {
            $res['ConsumePeriod'] = $this->consumePeriod;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
        }
        if (null !== $this->costUnitCode) {
            $res['CostUnitCode'] = $this->costUnitCode;
        }
        if (null !== $this->currentAmortizationDeductedByCoupons) {
            $res['CurrentAmortizationDeductedByCoupons'] = $this->currentAmortizationDeductedByCoupons;
        }
        if (null !== $this->currentAmortizationInvoiceDiscount) {
            $res['CurrentAmortizationInvoiceDiscount'] = $this->currentAmortizationInvoiceDiscount;
        }
        if (null !== $this->currentAmortizationPretaxAmount) {
            $res['CurrentAmortizationPretaxAmount'] = $this->currentAmortizationPretaxAmount;
        }
        if (null !== $this->currentAmortizationPretaxGrossAmount) {
            $res['CurrentAmortizationPretaxGrossAmount'] = $this->currentAmortizationPretaxGrossAmount;
        }
        if (null !== $this->currentAmortizationRoundDownDiscount) {
            $res['CurrentAmortizationRoundDownDiscount'] = $this->currentAmortizationRoundDownDiscount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = $this->instanceConfig;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
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
        if (null !== $this->productDetailCode) {
            $res['ProductDetailCode'] = $this->productDetailCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->referFrInstanceID) {
            $res['ReferFrInstanceID'] = $this->referFrInstanceID;
        }
        if (null !== $this->referFrOwnerID) {
            $res['ReferFrOwnerID'] = $this->referFrOwnerID;
        }
        if (null !== $this->referFrProductDetailCode) {
            $res['ReferFrProductDetailCode'] = $this->referFrProductDetailCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->splitAccountName) {
            $res['SplitAccountName'] = $this->splitAccountName;
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
        if (null !== $this->unusedAmortizationDeductedByCoupons) {
            $res['UnusedAmortizationDeductedByCoupons'] = $this->unusedAmortizationDeductedByCoupons;
        }
        if (null !== $this->unusedAmortizationInvoiceDiscount) {
            $res['UnusedAmortizationInvoiceDiscount'] = $this->unusedAmortizationInvoiceDiscount;
        }
        if (null !== $this->unusedAmortizationPretaxAmount) {
            $res['UnusedAmortizationPretaxAmount'] = $this->unusedAmortizationPretaxAmount;
        }
        if (null !== $this->unusedAmortizationPretaxGrossAmount) {
            $res['UnusedAmortizationPretaxGrossAmount'] = $this->unusedAmortizationPretaxGrossAmount;
        }
        if (null !== $this->unusedAmortizationRoundDownDiscount) {
            $res['UnusedAmortizationRoundDownDiscount'] = $this->unusedAmortizationRoundDownDiscount;
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
        if (isset($map['AmortizationPeriod'])) {
            $model->amortizationPeriod = $map['AmortizationPeriod'];
        }
        if (isset($map['AmortizationPeriodDay'])) {
            $model->amortizationPeriodDay = $map['AmortizationPeriodDay'];
        }
        if (isset($map['AmortizationStatus'])) {
            $model->amortizationStatus = $map['AmortizationStatus'];
        }
        if (isset($map['BillAccountID'])) {
            $model->billAccountID = $map['BillAccountID'];
        }
        if (isset($map['BillAccountName'])) {
            $model->billAccountName = $map['BillAccountName'];
        }
        if (isset($map['BillOwnerID'])) {
            $model->billOwnerID = $map['BillOwnerID'];
        }
        if (isset($map['BillOwnerName'])) {
            $model->billOwnerName = $map['BillOwnerName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ConsumePeriod'])) {
            $model->consumePeriod = $map['ConsumePeriod'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
        }
        if (isset($map['CostUnitCode'])) {
            $model->costUnitCode = $map['CostUnitCode'];
        }
        if (isset($map['CurrentAmortizationDeductedByCoupons'])) {
            $model->currentAmortizationDeductedByCoupons = $map['CurrentAmortizationDeductedByCoupons'];
        }
        if (isset($map['CurrentAmortizationInvoiceDiscount'])) {
            $model->currentAmortizationInvoiceDiscount = $map['CurrentAmortizationInvoiceDiscount'];
        }
        if (isset($map['CurrentAmortizationPretaxAmount'])) {
            $model->currentAmortizationPretaxAmount = $map['CurrentAmortizationPretaxAmount'];
        }
        if (isset($map['CurrentAmortizationPretaxGrossAmount'])) {
            $model->currentAmortizationPretaxGrossAmount = $map['CurrentAmortizationPretaxGrossAmount'];
        }
        if (isset($map['CurrentAmortizationRoundDownDiscount'])) {
            $model->currentAmortizationRoundDownDiscount = $map['CurrentAmortizationRoundDownDiscount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['InstanceConfig'])) {
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
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
        if (isset($map['ProductDetailCode'])) {
            $model->productDetailCode = $map['ProductDetailCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ReferFrInstanceID'])) {
            $model->referFrInstanceID = $map['ReferFrInstanceID'];
        }
        if (isset($map['ReferFrOwnerID'])) {
            $model->referFrOwnerID = $map['ReferFrOwnerID'];
        }
        if (isset($map['ReferFrProductDetailCode'])) {
            $model->referFrProductDetailCode = $map['ReferFrProductDetailCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['SplitAccountName'])) {
            $model->splitAccountName = $map['SplitAccountName'];
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
        if (isset($map['UnusedAmortizationDeductedByCoupons'])) {
            $model->unusedAmortizationDeductedByCoupons = $map['UnusedAmortizationDeductedByCoupons'];
        }
        if (isset($map['UnusedAmortizationInvoiceDiscount'])) {
            $model->unusedAmortizationInvoiceDiscount = $map['UnusedAmortizationInvoiceDiscount'];
        }
        if (isset($map['UnusedAmortizationPretaxAmount'])) {
            $model->unusedAmortizationPretaxAmount = $map['UnusedAmortizationPretaxAmount'];
        }
        if (isset($map['UnusedAmortizationPretaxGrossAmount'])) {
            $model->unusedAmortizationPretaxGrossAmount = $map['UnusedAmortizationPretaxGrossAmount'];
        }
        if (isset($map['UnusedAmortizationRoundDownDiscount'])) {
            $model->unusedAmortizationRoundDownDiscount = $map['UnusedAmortizationRoundDownDiscount'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
