<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody\extendLedgerList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody\originalCashAmountList;

class GetFundAccountAvailableAmountResponseBody extends Model
{
    /**
     * @var string
     */
    public $availableAmount;

    /**
     * @var string
     */
    public $availableCreditAmount;

    /**
     * @var string
     */
    public $bankAcceptanceAmount;

    /**
     * @var string
     */
    public $cashAmount;

    /**
     * @var string
     */
    public $creditAmount;

    /**
     * @var string
     */
    public $creditRefundAmount;

    /**
     * @var bool
     */
    public $creditUser;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $currentMonthUnclearedAmount;

    /**
     * @var extendLedgerList[]
     */
    public $extendLedgerList;

    /**
     * @var string
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @var string
     */
    public $fundAccountStatus;

    /**
     * @var string
     */
    public $fundAccountType;

    /**
     * @var string
     */
    public $historyMonthUnclearedAmount;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $negativeBillAmount;

    /**
     * @var originalCashAmountList[]
     */
    public $originalCashAmountList;

    /**
     * @var string
     */
    public $quotaAmount;

    /**
     * @var string
     */
    public $quotaConsumedAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        if (\is_array($this->extendLedgerList)) {
            Model::validateArray($this->extendLedgerList);
        }
        if (\is_array($this->originalCashAmountList)) {
            Model::validateArray($this->originalCashAmountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->extendLedgerList)) {
                $res['ExtendLedgerList'] = [];
                $n1 = 0;
                foreach ($this->extendLedgerList as $item1) {
                    $res['ExtendLedgerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->originalCashAmountList)) {
                $res['OriginalCashAmountList'] = [];
                $n1 = 0;
                foreach ($this->originalCashAmountList as $item1) {
                    $res['OriginalCashAmountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ExtendLedgerList'] as $item1) {
                    $model->extendLedgerList[$n1] = extendLedgerList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['OriginalCashAmountList'] as $item1) {
                    $model->originalCashAmountList[$n1] = originalCashAmountList::fromMap($item1);
                    ++$n1;
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
