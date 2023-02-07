<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeProductAmortizedCostByConsumePeriodResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 202210
     *
     * @var string
     */
    public $amortizationPeriod;

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
     * @example 202210
     *
     * @var string
     */
    public $consumePeriod;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationDeductedByCashCoupons;

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
    public $currentAmortizationDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationExpenditureAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationInvoiceDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $currentAmortizationPretaxAmount;

    /**
     * @example 0
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
     * @var float
     */
    public $expenditureAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

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
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedDeductedByCashCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedDeductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedExpenditureAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedInvoiceDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedPretaxAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $previouslyAmortizedRoundDownDiscount;

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
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationDeductedByCashCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationDeductedByCoupons;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationDeductedByPrepaidCard;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationExpenditureAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationInvoiceDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationPretaxAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationPretaxGrossAmount;

    /**
     * @example 0
     *
     * @var float
     */
    public $remainingAmortizationRoundDownDiscount;

    /**
     * @example 0
     *
     * @var float
     */
    public $roundDownDiscount;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'amortizationPeriod'                         => 'AmortizationPeriod',
        'amortizationStatus'                         => 'AmortizationStatus',
        'billAccountID'                              => 'BillAccountID',
        'billAccountName'                            => 'BillAccountName',
        'billOwnerID'                                => 'BillOwnerID',
        'billOwnerName'                              => 'BillOwnerName',
        'bizType'                                    => 'BizType',
        'consumePeriod'                              => 'ConsumePeriod',
        'currentAmortizationDeductedByCashCoupons'   => 'CurrentAmortizationDeductedByCashCoupons',
        'currentAmortizationDeductedByCoupons'       => 'CurrentAmortizationDeductedByCoupons',
        'currentAmortizationDeductedByPrepaidCard'   => 'CurrentAmortizationDeductedByPrepaidCard',
        'currentAmortizationExpenditureAmount'       => 'CurrentAmortizationExpenditureAmount',
        'currentAmortizationInvoiceDiscount'         => 'CurrentAmortizationInvoiceDiscount',
        'currentAmortizationPretaxAmount'            => 'CurrentAmortizationPretaxAmount',
        'currentAmortizationPretaxGrossAmount'       => 'CurrentAmortizationPretaxGrossAmount',
        'currentAmortizationRoundDownDiscount'       => 'CurrentAmortizationRoundDownDiscount',
        'deductedByCashCoupons'                      => 'DeductedByCashCoupons',
        'deductedByCoupons'                          => 'DeductedByCoupons',
        'deductedByPrepaidCard'                      => 'DeductedByPrepaidCard',
        'expenditureAmount'                          => 'ExpenditureAmount',
        'invoiceDiscount'                            => 'InvoiceDiscount',
        'pretaxAmount'                               => 'PretaxAmount',
        'pretaxGrossAmount'                          => 'PretaxGrossAmount',
        'previouslyAmortizedDeductedByCashCoupons'   => 'PreviouslyAmortizedDeductedByCashCoupons',
        'previouslyAmortizedDeductedByCoupons'       => 'PreviouslyAmortizedDeductedByCoupons',
        'previouslyAmortizedDeductedByPrepaidCard'   => 'PreviouslyAmortizedDeductedByPrepaidCard',
        'previouslyAmortizedExpenditureAmount'       => 'PreviouslyAmortizedExpenditureAmount',
        'previouslyAmortizedInvoiceDiscount'         => 'PreviouslyAmortizedInvoiceDiscount',
        'previouslyAmortizedPretaxAmount'            => 'PreviouslyAmortizedPretaxAmount',
        'previouslyAmortizedPretaxGrossAmount'       => 'PreviouslyAmortizedPretaxGrossAmount',
        'previouslyAmortizedRoundDownDiscount'       => 'PreviouslyAmortizedRoundDownDiscount',
        'productCode'                                => 'ProductCode',
        'productDetail'                              => 'ProductDetail',
        'productDetailCode'                          => 'ProductDetailCode',
        'productName'                                => 'ProductName',
        'remainingAmortizationDeductedByCashCoupons' => 'RemainingAmortizationDeductedByCashCoupons',
        'remainingAmortizationDeductedByCoupons'     => 'RemainingAmortizationDeductedByCoupons',
        'remainingAmortizationDeductedByPrepaidCard' => 'RemainingAmortizationDeductedByPrepaidCard',
        'remainingAmortizationExpenditureAmount'     => 'RemainingAmortizationExpenditureAmount',
        'remainingAmortizationInvoiceDiscount'       => 'RemainingAmortizationInvoiceDiscount',
        'remainingAmortizationPretaxAmount'          => 'RemainingAmortizationPretaxAmount',
        'remainingAmortizationPretaxGrossAmount'     => 'RemainingAmortizationPretaxGrossAmount',
        'remainingAmortizationRoundDownDiscount'     => 'RemainingAmortizationRoundDownDiscount',
        'roundDownDiscount'                          => 'RoundDownDiscount',
        'subscriptionType'                           => 'SubscriptionType',
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
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
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
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
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
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
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
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
