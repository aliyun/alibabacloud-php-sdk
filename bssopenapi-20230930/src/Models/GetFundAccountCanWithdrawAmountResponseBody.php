<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetFundAccountCanWithdrawAmountResponseBody extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $canOriginalWithdrawAmount;

    /**
     * @example 500
     *
     * @var string
     */
    public $canWithdrawAmount;

    /**
     * @example 100
     *
     * @var string
     */
    public $cannotOriginalWithdrawAmount;

    /**
     * @example 1000
     *
     * @var string
     */
    public $cashAmount;

    /**
     * @example 100
     *
     * @var string
     */
    public $creditMemoAmount;

    /**
     * @example 200
     *
     * @var string
     */
    public $currentMonthUnclearedAmount;

    /**
     * @example 100
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
     * @example 100
     *
     * @var string
     */
    public $payAsYouGoReversedAmount;

    /**
     * @example DF58589C-A06C-4224-8615-7797E6474FA3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var string
     */
    public $transferAmount;
    protected $_name = [
        'canOriginalWithdrawAmount' => 'CanOriginalWithdrawAmount',
        'canWithdrawAmount' => 'CanWithdrawAmount',
        'cannotOriginalWithdrawAmount' => 'CannotOriginalWithdrawAmount',
        'cashAmount' => 'CashAmount',
        'creditMemoAmount' => 'CreditMemoAmount',
        'currentMonthUnclearedAmount' => 'CurrentMonthUnclearedAmount',
        'historyMonthUnclearedAmount' => 'HistoryMonthUnclearedAmount',
        'metadata' => 'Metadata',
        'payAsYouGoReversedAmount' => 'PayAsYouGoReversedAmount',
        'requestId' => 'RequestId',
        'transferAmount' => 'TransferAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->canOriginalWithdrawAmount) {
            $res['CanOriginalWithdrawAmount'] = $this->canOriginalWithdrawAmount;
        }
        if (null !== $this->canWithdrawAmount) {
            $res['CanWithdrawAmount'] = $this->canWithdrawAmount;
        }
        if (null !== $this->cannotOriginalWithdrawAmount) {
            $res['CannotOriginalWithdrawAmount'] = $this->cannotOriginalWithdrawAmount;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->creditMemoAmount) {
            $res['CreditMemoAmount'] = $this->creditMemoAmount;
        }
        if (null !== $this->currentMonthUnclearedAmount) {
            $res['CurrentMonthUnclearedAmount'] = $this->currentMonthUnclearedAmount;
        }
        if (null !== $this->historyMonthUnclearedAmount) {
            $res['HistoryMonthUnclearedAmount'] = $this->historyMonthUnclearedAmount;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->payAsYouGoReversedAmount) {
            $res['PayAsYouGoReversedAmount'] = $this->payAsYouGoReversedAmount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transferAmount) {
            $res['TransferAmount'] = $this->transferAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFundAccountCanWithdrawAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanOriginalWithdrawAmount'])) {
            $model->canOriginalWithdrawAmount = $map['CanOriginalWithdrawAmount'];
        }
        if (isset($map['CanWithdrawAmount'])) {
            $model->canWithdrawAmount = $map['CanWithdrawAmount'];
        }
        if (isset($map['CannotOriginalWithdrawAmount'])) {
            $model->cannotOriginalWithdrawAmount = $map['CannotOriginalWithdrawAmount'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CreditMemoAmount'])) {
            $model->creditMemoAmount = $map['CreditMemoAmount'];
        }
        if (isset($map['CurrentMonthUnclearedAmount'])) {
            $model->currentMonthUnclearedAmount = $map['CurrentMonthUnclearedAmount'];
        }
        if (isset($map['HistoryMonthUnclearedAmount'])) {
            $model->historyMonthUnclearedAmount = $map['HistoryMonthUnclearedAmount'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['PayAsYouGoReversedAmount'])) {
            $model->payAsYouGoReversedAmount = $map['PayAsYouGoReversedAmount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransferAmount'])) {
            $model->transferAmount = $map['TransferAmount'];
        }

        return $model;
    }
}
