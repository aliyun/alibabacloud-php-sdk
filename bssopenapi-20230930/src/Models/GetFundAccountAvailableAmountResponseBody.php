<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody\extendLedgerList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody\originalCashAmountList;
use AlibabaCloud\Tea\Model;

class GetFundAccountAvailableAmountResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $availableAmount;

    /**
     * @example 50
     *
     * @var string
     */
    public $availableCreditAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $bankAcceptanceAmount;

    /**
     * @example 50
     *
     * @var string
     */
    public $cashAmount;

    /**
     * @example 100
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $creditRefundAmount;

    /**
     * @var bool
     */
    public $creditUser;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 20
     *
     * @var string
     */
    public $currentMonthUnclearedAmount;

    /**
     * @var extendLedgerList[]
     */
    public $extendLedgerList;

    /**
     * @example 12332112
     *
     * @var string
     */
    public $fundAccountId;

    /**
     * @example 1344312434
     *
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @example valid
     *
     * @var string
     */
    public $fundAccountStatus;

    /**
     * @example REDIRECT_USER
     *
     * @var string
     */
    public $fundAccountType;

    /**
     * @example 30
     *
     * @var string
     */
    public $historyMonthUnclearedAmount;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 0
     *
     * @var string
     */
    public $negativeBillAmount;

    /**
     * @var originalCashAmountList[]
     */
    public $originalCashAmountList;

    /**
     * @example 20
     *
     * @var string
     */
    public $quotaAmount;

    /**
     * @example 10
     *
     * @var string
     */
    public $quotaConsumedAmount;

    /**
     * @example F96A2D13-7509-5DF9-A60E-E7E3A3CB68E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 50
     *
     * @var string
     */
    public $unclearedAmount;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'availableCreditAmount' => 'AvailableCreditAmount',
        'bankAcceptanceAmount' => 'BankAcceptanceAmount',
        'cashAmount' => 'CashAmount',
        'creditAmount' => 'CreditAmount',
        'creditRefundAmount' => 'CreditRefundAmount',
        'creditUser' => 'CreditUser',
        'currency' => 'Currency',
        'currentMonthUnclearedAmount' => 'CurrentMonthUnclearedAmount',
        'extendLedgerList' => 'ExtendLedgerList',
        'fundAccountId' => 'FundAccountId',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'fundAccountStatus' => 'FundAccountStatus',
        'fundAccountType' => 'FundAccountType',
        'historyMonthUnclearedAmount' => 'HistoryMonthUnclearedAmount',
        'metadata' => 'Metadata',
        'negativeBillAmount' => 'NegativeBillAmount',
        'originalCashAmountList' => 'OriginalCashAmountList',
        'quotaAmount' => 'QuotaAmount',
        'quotaConsumedAmount' => 'QuotaConsumedAmount',
        'requestId' => 'RequestId',
        'unclearedAmount' => 'UnclearedAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->availableCreditAmount) {
            $res['AvailableCreditAmount'] = $this->availableCreditAmount;
        }
        if (null !== $this->bankAcceptanceAmount) {
            $res['BankAcceptanceAmount'] = $this->bankAcceptanceAmount;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }
        if (null !== $this->creditRefundAmount) {
            $res['CreditRefundAmount'] = $this->creditRefundAmount;
        }
        if (null !== $this->creditUser) {
            $res['CreditUser'] = $this->creditUser;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->currentMonthUnclearedAmount) {
            $res['CurrentMonthUnclearedAmount'] = $this->currentMonthUnclearedAmount;
        }
        if (null !== $this->extendLedgerList) {
            $res['ExtendLedgerList'] = [];
            if (null !== $this->extendLedgerList && \is_array($this->extendLedgerList)) {
                $n = 0;
                foreach ($this->extendLedgerList as $item) {
                    $res['ExtendLedgerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }
        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }
        if (null !== $this->fundAccountStatus) {
            $res['FundAccountStatus'] = $this->fundAccountStatus;
        }
        if (null !== $this->fundAccountType) {
            $res['FundAccountType'] = $this->fundAccountType;
        }
        if (null !== $this->historyMonthUnclearedAmount) {
            $res['HistoryMonthUnclearedAmount'] = $this->historyMonthUnclearedAmount;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->negativeBillAmount) {
            $res['NegativeBillAmount'] = $this->negativeBillAmount;
        }
        if (null !== $this->originalCashAmountList) {
            $res['OriginalCashAmountList'] = [];
            if (null !== $this->originalCashAmountList && \is_array($this->originalCashAmountList)) {
                $n = 0;
                foreach ($this->originalCashAmountList as $item) {
                    $res['OriginalCashAmountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quotaAmount) {
            $res['QuotaAmount'] = $this->quotaAmount;
        }
        if (null !== $this->quotaConsumedAmount) {
            $res['QuotaConsumedAmount'] = $this->quotaConsumedAmount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unclearedAmount) {
            $res['UnclearedAmount'] = $this->unclearedAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFundAccountAvailableAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['AvailableCreditAmount'])) {
            $model->availableCreditAmount = $map['AvailableCreditAmount'];
        }
        if (isset($map['BankAcceptanceAmount'])) {
            $model->bankAcceptanceAmount = $map['BankAcceptanceAmount'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }
        if (isset($map['CreditRefundAmount'])) {
            $model->creditRefundAmount = $map['CreditRefundAmount'];
        }
        if (isset($map['CreditUser'])) {
            $model->creditUser = $map['CreditUser'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['CurrentMonthUnclearedAmount'])) {
            $model->currentMonthUnclearedAmount = $map['CurrentMonthUnclearedAmount'];
        }
        if (isset($map['ExtendLedgerList'])) {
            if (!empty($map['ExtendLedgerList'])) {
                $model->extendLedgerList = [];
                $n = 0;
                foreach ($map['ExtendLedgerList'] as $item) {
                    $model->extendLedgerList[$n++] = null !== $item ? extendLedgerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }
        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }
        if (isset($map['FundAccountStatus'])) {
            $model->fundAccountStatus = $map['FundAccountStatus'];
        }
        if (isset($map['FundAccountType'])) {
            $model->fundAccountType = $map['FundAccountType'];
        }
        if (isset($map['HistoryMonthUnclearedAmount'])) {
            $model->historyMonthUnclearedAmount = $map['HistoryMonthUnclearedAmount'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['NegativeBillAmount'])) {
            $model->negativeBillAmount = $map['NegativeBillAmount'];
        }
        if (isset($map['OriginalCashAmountList'])) {
            if (!empty($map['OriginalCashAmountList'])) {
                $model->originalCashAmountList = [];
                $n = 0;
                foreach ($map['OriginalCashAmountList'] as $item) {
                    $model->originalCashAmountList[$n++] = null !== $item ? originalCashAmountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QuotaAmount'])) {
            $model->quotaAmount = $map['QuotaAmount'];
        }
        if (isset($map['QuotaConsumedAmount'])) {
            $model->quotaConsumedAmount = $map['QuotaConsumedAmount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnclearedAmount'])) {
            $model->unclearedAmount = $map['UnclearedAmount'];
        }

        return $model;
    }
}
