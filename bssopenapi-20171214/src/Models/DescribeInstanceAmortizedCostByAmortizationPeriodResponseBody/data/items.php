<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByAmortizationPeriodResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $afterDiscountAmount;

    /**
     * @var string
     */
    public $amortizationPeriod;

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
    public $currentAmortizationAfterDiscountAmount;

    /**
     * @var float
     */
    public $currentAmortizationDeductedByCashCoupons;

    /**
     * @var float
     */
    public $currentAmortizationDeductedByCoupons;

    /**
     * @var float
     */
    public $currentAmortizationDeductedByPrepaidCard;

    /**
     * @var float
     */
    public $currentAmortizationExpenditureAmount;

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
    public $deductedByCashCoupons;

    /**
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @var float
     */
    public $expenditureAmount;

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
     * @var float
     */
    public $previouslyAmortizedAfterDiscountAmount;

    /**
     * @var float
     */
    public $previouslyAmortizedDeductedByCashCoupons;

    /**
     * @var float
     */
    public $previouslyAmortizedDeductedByCoupons;

    /**
     * @var float
     */
    public $previouslyAmortizedDeductedByPrepaidCard;

    /**
     * @var float
     */
    public $previouslyAmortizedExpenditureAmount;

    /**
     * @var float
     */
    public $previouslyAmortizedInvoiceDiscount;

    /**
     * @var float
     */
    public $previouslyAmortizedPretaxAmount;

    /**
     * @var float
     */
    public $previouslyAmortizedPretaxGrossAmount;

    /**
     * @var float
     */
    public $previouslyAmortizedRoundDownDiscount;

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
    public $region;

    /**
     * @var float
     */
    public $remainingAmortizationAfterDiscountAmount;

    /**
     * @var float
     */
    public $remainingAmortizationDeductedByCashCoupons;

    /**
     * @var float
     */
    public $remainingAmortizationDeductedByCoupons;

    /**
     * @var float
     */
    public $remainingAmortizationDeductedByPrepaidCard;

    /**
     * @var float
     */
    public $remainingAmortizationExpenditureAmount;

    /**
     * @var float
     */
    public $remainingAmortizationInvoiceDiscount;

    /**
     * @var float
     */
    public $remainingAmortizationPretaxAmount;

    /**
     * @var float
     */
    public $remainingAmortizationPretaxGrossAmount;

    /**
     * @var float
     */
    public $remainingAmortizationRoundDownDiscount;

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
     * @var string
     */
    public $zone;
    protected $_name = [
        'afterDiscountAmount' => 'AfterDiscountAmount',
        'amortizationPeriod' => 'AmortizationPeriod',
        'amortizationStatus' => 'AmortizationStatus',
        'billAccountID' => 'BillAccountID',
        'billAccountName' => 'BillAccountName',
        'billOwnerID' => 'BillOwnerID',
        'billOwnerName' => 'BillOwnerName',
        'bizType' => 'BizType',
        'consumePeriod' => 'ConsumePeriod',
        'costUnit' => 'CostUnit',
        'costUnitCode' => 'CostUnitCode',
        'currentAmortizationAfterDiscountAmount' => 'CurrentAmortizationAfterDiscountAmount',
        'currentAmortizationDeductedByCashCoupons' => 'CurrentAmortizationDeductedByCashCoupons',
        'currentAmortizationDeductedByCoupons' => 'CurrentAmortizationDeductedByCoupons',
        'currentAmortizationDeductedByPrepaidCard' => 'CurrentAmortizationDeductedByPrepaidCard',
        'currentAmortizationExpenditureAmount' => 'CurrentAmortizationExpenditureAmount',
        'currentAmortizationInvoiceDiscount' => 'CurrentAmortizationInvoiceDiscount',
        'currentAmortizationPretaxAmount' => 'CurrentAmortizationPretaxAmount',
        'currentAmortizationPretaxGrossAmount' => 'CurrentAmortizationPretaxGrossAmount',
        'currentAmortizationRoundDownDiscount' => 'CurrentAmortizationRoundDownDiscount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByCoupons' => 'DeductedByCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'expenditureAmount' => 'ExpenditureAmount',
        'instanceID' => 'InstanceID',
        'internetIP' => 'InternetIP',
        'intranetIP' => 'IntranetIP',
        'invoiceDiscount' => 'InvoiceDiscount',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'previouslyAmortizedAfterDiscountAmount' => 'PreviouslyAmortizedAfterDiscountAmount',
        'previouslyAmortizedDeductedByCashCoupons' => 'PreviouslyAmortizedDeductedByCashCoupons',
        'previouslyAmortizedDeductedByCoupons' => 'PreviouslyAmortizedDeductedByCoupons',
        'previouslyAmortizedDeductedByPrepaidCard' => 'PreviouslyAmortizedDeductedByPrepaidCard',
        'previouslyAmortizedExpenditureAmount' => 'PreviouslyAmortizedExpenditureAmount',
        'previouslyAmortizedInvoiceDiscount' => 'PreviouslyAmortizedInvoiceDiscount',
        'previouslyAmortizedPretaxAmount' => 'PreviouslyAmortizedPretaxAmount',
        'previouslyAmortizedPretaxGrossAmount' => 'PreviouslyAmortizedPretaxGrossAmount',
        'previouslyAmortizedRoundDownDiscount' => 'PreviouslyAmortizedRoundDownDiscount',
        'productCode' => 'ProductCode',
        'productDetail' => 'ProductDetail',
        'productDetailCode' => 'ProductDetailCode',
        'productName' => 'ProductName',
        'region' => 'Region',
        'remainingAmortizationAfterDiscountAmount' => 'RemainingAmortizationAfterDiscountAmount',
        'remainingAmortizationDeductedByCashCoupons' => 'RemainingAmortizationDeductedByCashCoupons',
        'remainingAmortizationDeductedByCoupons' => 'RemainingAmortizationDeductedByCoupons',
        'remainingAmortizationDeductedByPrepaidCard' => 'RemainingAmortizationDeductedByPrepaidCard',
        'remainingAmortizationExpenditureAmount' => 'RemainingAmortizationExpenditureAmount',
        'remainingAmortizationInvoiceDiscount' => 'RemainingAmortizationInvoiceDiscount',
        'remainingAmortizationPretaxAmount' => 'RemainingAmortizationPretaxAmount',
        'remainingAmortizationPretaxGrossAmount' => 'RemainingAmortizationPretaxGrossAmount',
        'remainingAmortizationRoundDownDiscount' => 'RemainingAmortizationRoundDownDiscount',
        'resourceGroup' => 'ResourceGroup',
        'roundDownDiscount' => 'RoundDownDiscount',
        'splitAccountName' => 'SplitAccountName',
        'splitItemID' => 'SplitItemID',
        'splitItemName' => 'SplitItemName',
        'splitProductDetail' => 'SplitProductDetail',
        'subscriptionType' => 'SubscriptionType',
        'tag' => 'Tag',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterDiscountAmount) {
            $res['AfterDiscountAmount'] = $this->afterDiscountAmount;
        }

        if (null !== $this->amortizationPeriod) {
            $res['AmortizationPeriod'] = $this->amortizationPeriod;
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

        if (null !== $this->currentAmortizationAfterDiscountAmount) {
            $res['CurrentAmortizationAfterDiscountAmount'] = $this->currentAmortizationAfterDiscountAmount;
        }

        if (null !== $this->currentAmortizationDeductedByCashCoupons) {
            $res['CurrentAmortizationDeductedByCashCoupons'] = $this->currentAmortizationDeductedByCashCoupons;
        }

        if (null !== $this->currentAmortizationDeductedByCoupons) {
            $res['CurrentAmortizationDeductedByCoupons'] = $this->currentAmortizationDeductedByCoupons;
        }

        if (null !== $this->currentAmortizationDeductedByPrepaidCard) {
            $res['CurrentAmortizationDeductedByPrepaidCard'] = $this->currentAmortizationDeductedByPrepaidCard;
        }

        if (null !== $this->currentAmortizationExpenditureAmount) {
            $res['CurrentAmortizationExpenditureAmount'] = $this->currentAmortizationExpenditureAmount;
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

        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }

        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }

        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }

        if (null !== $this->expenditureAmount) {
            $res['ExpenditureAmount'] = $this->expenditureAmount;
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

        if (null !== $this->previouslyAmortizedAfterDiscountAmount) {
            $res['PreviouslyAmortizedAfterDiscountAmount'] = $this->previouslyAmortizedAfterDiscountAmount;
        }

        if (null !== $this->previouslyAmortizedDeductedByCashCoupons) {
            $res['PreviouslyAmortizedDeductedByCashCoupons'] = $this->previouslyAmortizedDeductedByCashCoupons;
        }

        if (null !== $this->previouslyAmortizedDeductedByCoupons) {
            $res['PreviouslyAmortizedDeductedByCoupons'] = $this->previouslyAmortizedDeductedByCoupons;
        }

        if (null !== $this->previouslyAmortizedDeductedByPrepaidCard) {
            $res['PreviouslyAmortizedDeductedByPrepaidCard'] = $this->previouslyAmortizedDeductedByPrepaidCard;
        }

        if (null !== $this->previouslyAmortizedExpenditureAmount) {
            $res['PreviouslyAmortizedExpenditureAmount'] = $this->previouslyAmortizedExpenditureAmount;
        }

        if (null !== $this->previouslyAmortizedInvoiceDiscount) {
            $res['PreviouslyAmortizedInvoiceDiscount'] = $this->previouslyAmortizedInvoiceDiscount;
        }

        if (null !== $this->previouslyAmortizedPretaxAmount) {
            $res['PreviouslyAmortizedPretaxAmount'] = $this->previouslyAmortizedPretaxAmount;
        }

        if (null !== $this->previouslyAmortizedPretaxGrossAmount) {
            $res['PreviouslyAmortizedPretaxGrossAmount'] = $this->previouslyAmortizedPretaxGrossAmount;
        }

        if (null !== $this->previouslyAmortizedRoundDownDiscount) {
            $res['PreviouslyAmortizedRoundDownDiscount'] = $this->previouslyAmortizedRoundDownDiscount;
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

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->remainingAmortizationAfterDiscountAmount) {
            $res['RemainingAmortizationAfterDiscountAmount'] = $this->remainingAmortizationAfterDiscountAmount;
        }

        if (null !== $this->remainingAmortizationDeductedByCashCoupons) {
            $res['RemainingAmortizationDeductedByCashCoupons'] = $this->remainingAmortizationDeductedByCashCoupons;
        }

        if (null !== $this->remainingAmortizationDeductedByCoupons) {
            $res['RemainingAmortizationDeductedByCoupons'] = $this->remainingAmortizationDeductedByCoupons;
        }

        if (null !== $this->remainingAmortizationDeductedByPrepaidCard) {
            $res['RemainingAmortizationDeductedByPrepaidCard'] = $this->remainingAmortizationDeductedByPrepaidCard;
        }

        if (null !== $this->remainingAmortizationExpenditureAmount) {
            $res['RemainingAmortizationExpenditureAmount'] = $this->remainingAmortizationExpenditureAmount;
        }

        if (null !== $this->remainingAmortizationInvoiceDiscount) {
            $res['RemainingAmortizationInvoiceDiscount'] = $this->remainingAmortizationInvoiceDiscount;
        }

        if (null !== $this->remainingAmortizationPretaxAmount) {
            $res['RemainingAmortizationPretaxAmount'] = $this->remainingAmortizationPretaxAmount;
        }

        if (null !== $this->remainingAmortizationPretaxGrossAmount) {
            $res['RemainingAmortizationPretaxGrossAmount'] = $this->remainingAmortizationPretaxGrossAmount;
        }

        if (null !== $this->remainingAmortizationRoundDownDiscount) {
            $res['RemainingAmortizationRoundDownDiscount'] = $this->remainingAmortizationRoundDownDiscount;
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
        if (isset($map['AfterDiscountAmount'])) {
            $model->afterDiscountAmount = $map['AfterDiscountAmount'];
        }

        if (isset($map['AmortizationPeriod'])) {
            $model->amortizationPeriod = $map['AmortizationPeriod'];
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

        if (isset($map['CurrentAmortizationAfterDiscountAmount'])) {
            $model->currentAmortizationAfterDiscountAmount = $map['CurrentAmortizationAfterDiscountAmount'];
        }

        if (isset($map['CurrentAmortizationDeductedByCashCoupons'])) {
            $model->currentAmortizationDeductedByCashCoupons = $map['CurrentAmortizationDeductedByCashCoupons'];
        }

        if (isset($map['CurrentAmortizationDeductedByCoupons'])) {
            $model->currentAmortizationDeductedByCoupons = $map['CurrentAmortizationDeductedByCoupons'];
        }

        if (isset($map['CurrentAmortizationDeductedByPrepaidCard'])) {
            $model->currentAmortizationDeductedByPrepaidCard = $map['CurrentAmortizationDeductedByPrepaidCard'];
        }

        if (isset($map['CurrentAmortizationExpenditureAmount'])) {
            $model->currentAmortizationExpenditureAmount = $map['CurrentAmortizationExpenditureAmount'];
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

        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }

        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }

        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }

        if (isset($map['ExpenditureAmount'])) {
            $model->expenditureAmount = $map['ExpenditureAmount'];
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

        if (isset($map['PreviouslyAmortizedAfterDiscountAmount'])) {
            $model->previouslyAmortizedAfterDiscountAmount = $map['PreviouslyAmortizedAfterDiscountAmount'];
        }

        if (isset($map['PreviouslyAmortizedDeductedByCashCoupons'])) {
            $model->previouslyAmortizedDeductedByCashCoupons = $map['PreviouslyAmortizedDeductedByCashCoupons'];
        }

        if (isset($map['PreviouslyAmortizedDeductedByCoupons'])) {
            $model->previouslyAmortizedDeductedByCoupons = $map['PreviouslyAmortizedDeductedByCoupons'];
        }

        if (isset($map['PreviouslyAmortizedDeductedByPrepaidCard'])) {
            $model->previouslyAmortizedDeductedByPrepaidCard = $map['PreviouslyAmortizedDeductedByPrepaidCard'];
        }

        if (isset($map['PreviouslyAmortizedExpenditureAmount'])) {
            $model->previouslyAmortizedExpenditureAmount = $map['PreviouslyAmortizedExpenditureAmount'];
        }

        if (isset($map['PreviouslyAmortizedInvoiceDiscount'])) {
            $model->previouslyAmortizedInvoiceDiscount = $map['PreviouslyAmortizedInvoiceDiscount'];
        }

        if (isset($map['PreviouslyAmortizedPretaxAmount'])) {
            $model->previouslyAmortizedPretaxAmount = $map['PreviouslyAmortizedPretaxAmount'];
        }

        if (isset($map['PreviouslyAmortizedPretaxGrossAmount'])) {
            $model->previouslyAmortizedPretaxGrossAmount = $map['PreviouslyAmortizedPretaxGrossAmount'];
        }

        if (isset($map['PreviouslyAmortizedRoundDownDiscount'])) {
            $model->previouslyAmortizedRoundDownDiscount = $map['PreviouslyAmortizedRoundDownDiscount'];
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

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RemainingAmortizationAfterDiscountAmount'])) {
            $model->remainingAmortizationAfterDiscountAmount = $map['RemainingAmortizationAfterDiscountAmount'];
        }

        if (isset($map['RemainingAmortizationDeductedByCashCoupons'])) {
            $model->remainingAmortizationDeductedByCashCoupons = $map['RemainingAmortizationDeductedByCashCoupons'];
        }

        if (isset($map['RemainingAmortizationDeductedByCoupons'])) {
            $model->remainingAmortizationDeductedByCoupons = $map['RemainingAmortizationDeductedByCoupons'];
        }

        if (isset($map['RemainingAmortizationDeductedByPrepaidCard'])) {
            $model->remainingAmortizationDeductedByPrepaidCard = $map['RemainingAmortizationDeductedByPrepaidCard'];
        }

        if (isset($map['RemainingAmortizationExpenditureAmount'])) {
            $model->remainingAmortizationExpenditureAmount = $map['RemainingAmortizationExpenditureAmount'];
        }

        if (isset($map['RemainingAmortizationInvoiceDiscount'])) {
            $model->remainingAmortizationInvoiceDiscount = $map['RemainingAmortizationInvoiceDiscount'];
        }

        if (isset($map['RemainingAmortizationPretaxAmount'])) {
            $model->remainingAmortizationPretaxAmount = $map['RemainingAmortizationPretaxAmount'];
        }

        if (isset($map['RemainingAmortizationPretaxGrossAmount'])) {
            $model->remainingAmortizationPretaxGrossAmount = $map['RemainingAmortizationPretaxGrossAmount'];
        }

        if (isset($map['RemainingAmortizationRoundDownDiscount'])) {
            $model->remainingAmortizationRoundDownDiscount = $map['RemainingAmortizationRoundDownDiscount'];
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

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
