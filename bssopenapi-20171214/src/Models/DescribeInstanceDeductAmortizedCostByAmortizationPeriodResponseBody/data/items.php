<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $amortizationPeriod;

    /**
     * @var string
     */
    public $amortizationPeriodDay;

    /**
     * @var string
     */
    public $amortizationStatus;

    /**
     * @var int
     */
    public $billAccountID;

    /**
     * @var string
     */
    public $billAccountName;

    /**
     * @var int
     */
    public $billOwnerID;

    /**
     * @var string
     */
    public $billOwnerName;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $consumePeriod;

    /**
     * @var string
     */
    public $costUnit;

    /**
     * @var string
     */
    public $costUnitCode;

    /**
     * @var float
     */
    public $currentAmortizationDeductedByCoupons;

    /**
     * @var float
     */
    public $currentAmortizationInvoiceDiscount;

    /**
     * @var float
     */
    public $currentAmortizationPretaxAmount;

    /**
     * @var float
     */
    public $currentAmortizationPretaxGrossAmount;

    /**
     * @var float
     */
    public $currentAmortizationRoundDownDiscount;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var string
     */
    public $instanceConfig;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $internetIP;

    /**
     * @var string
     */
    public $intranetIP;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var float
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
    public $productDetailCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $referFrInstanceID;

    /**
     * @var string
     */
    public $referFrOwnerID;

    /**
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
     * @var float
     */
    public $roundDownDiscount;

    /**
     * @var string
     */
    public $splitAccountName;

    /**
     * @var string
     */
    public $splitItemID;

    /**
     * @var string
     */
    public $splitItemName;

    /**
     * @var string
     */
    public $splitProductDetail;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var float
     */
    public $unusedAmortizationDeductedByCoupons;

    /**
     * @var float
     */
    public $unusedAmortizationInvoiceDiscount;

    /**
     * @var float
     */
    public $unusedAmortizationPretaxAmount;

    /**
     * @var float
     */
    public $unusedAmortizationPretaxGrossAmount;

    /**
     * @var float
     */
    public $unusedAmortizationRoundDownDiscount;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'amortizationPeriod' => 'AmortizationPeriod',
        'amortizationPeriodDay' => 'AmortizationPeriodDay',
        'amortizationStatus' => 'AmortizationStatus',
        'billAccountID' => 'BillAccountID',
        'billAccountName' => 'BillAccountName',
        'billOwnerID' => 'BillOwnerID',
        'billOwnerName' => 'BillOwnerName',
        'bizType' => 'BizType',
        'consumePeriod' => 'ConsumePeriod',
        'costUnit' => 'CostUnit',
        'costUnitCode' => 'CostUnitCode',
        'currentAmortizationDeductedByCoupons' => 'CurrentAmortizationDeductedByCoupons',
        'currentAmortizationInvoiceDiscount' => 'CurrentAmortizationInvoiceDiscount',
        'currentAmortizationPretaxAmount' => 'CurrentAmortizationPretaxAmount',
        'currentAmortizationPretaxGrossAmount' => 'CurrentAmortizationPretaxGrossAmount',
        'currentAmortizationRoundDownDiscount' => 'CurrentAmortizationRoundDownDiscount',
        'deductedByCoupons' => 'DeductedByCoupons',
        'instanceConfig' => 'InstanceConfig',
        'instanceID' => 'InstanceID',
        'internetIP' => 'InternetIP',
        'intranetIP' => 'IntranetIP',
        'invoiceDiscount' => 'InvoiceDiscount',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode' => 'ProductCode',
        'productDetail' => 'ProductDetail',
        'productDetailCode' => 'ProductDetailCode',
        'productName' => 'ProductName',
        'referFrInstanceID' => 'ReferFrInstanceID',
        'referFrOwnerID' => 'ReferFrOwnerID',
        'referFrProductDetailCode' => 'ReferFrProductDetailCode',
        'region' => 'Region',
        'resourceGroup' => 'ResourceGroup',
        'roundDownDiscount' => 'RoundDownDiscount',
        'splitAccountName' => 'SplitAccountName',
        'splitItemID' => 'SplitItemID',
        'splitItemName' => 'SplitItemName',
        'splitProductDetail' => 'SplitProductDetail',
        'subscriptionType' => 'SubscriptionType',
        'tag' => 'Tag',
        'unusedAmortizationDeductedByCoupons' => 'UnusedAmortizationDeductedByCoupons',
        'unusedAmortizationInvoiceDiscount' => 'UnusedAmortizationInvoiceDiscount',
        'unusedAmortizationPretaxAmount' => 'UnusedAmortizationPretaxAmount',
        'unusedAmortizationPretaxGrossAmount' => 'UnusedAmortizationPretaxGrossAmount',
        'unusedAmortizationRoundDownDiscount' => 'UnusedAmortizationRoundDownDiscount',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
