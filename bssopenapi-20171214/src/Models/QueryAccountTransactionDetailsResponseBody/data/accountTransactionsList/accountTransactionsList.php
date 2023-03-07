<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model
{
    /**
     * @description The amount of the transaction.
     *
     * @example 1.00
     *
     * @var string
     */
    public $amount;

    /**
     * @description The balance of the account.
     *
     * @example 0
     *
     * @var string
     */
    public $balance;

    /**
     * @description The billing cycle.
     *
     * @example 2022-10
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The type of transaction payment. Valid values:
     *
     * Cash: pay for the transaction in cash. Deposit: pay for the transaction with deposit. RegularBankCreditRefund: pay for the transaction with credit refund controlled by a bank. DirectPay: directly pay for the transaction.
     * @example Cash
     *
     * @var string
     */
    public $fundType;

    /**
     * @description The ID of the order or bill.
     *
     * @example 2022120336190912
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The remarks.
     *
     * @example Test
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The transaction account.
     *
     * @example fortune_test@xxx.com
     *
     * @var string
     */
    public $transactionAccount;

    /**
     * @description The transaction channel.
     *
     * @example ALIPAY
     *
     * @var string
     */
    public $transactionChannel;

    /**
     * @description The serial number of the transaction channel.
     *
     * @example 123232434343532
     *
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description Indicates whether the transaction is of the income type or the expenditure type. If one of the following types is specified, results for the specific type are returned. If the type that you specified for the parameter does not belong to the following types, no result is returned. If the parameter is left empty, results for transactions of the income and expenditure types are all returned. Valid values:
     *
     * Income and Expense.
     * @example Income
     *
     * @var string
     */
    public $transactionFlow;

    /**
     * @description The number of the transaction.
     *
     * @example 43342334
     *
     * @var string
     */
    public $transactionNumber;

    /**
     * @description The time when the transaction was made.
     *
     * @example 2022-10-01
     *
     * @var string
     */
    public $transactionTime;

    /**
     * @description The type of the transaction. If one of the following transaction types is specified, results for the specified transaction type are returned. If the transaction type that you specified does not belong to the following transaction types, no result is returned. If the parameter is left empty, results for all transaction types are returned. Valid values:
     *
     * Payment, Withdraw, Refund, Consumption, Transfer, and Adjust.
     * @example Consumption
     *
     * @var string
     */
    public $transactionType;
    protected $_name = [
        'amount'               => 'Amount',
        'balance'              => 'Balance',
        'billingCycle'         => 'BillingCycle',
        'fundType'             => 'FundType',
        'recordID'             => 'RecordID',
        'remarks'              => 'Remarks',
        'transactionAccount'   => 'TransactionAccount',
        'transactionChannel'   => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'transactionFlow'      => 'TransactionFlow',
        'transactionNumber'    => 'TransactionNumber',
        'transactionTime'      => 'TransactionTime',
        'transactionType'      => 'TransactionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->transactionAccount) {
            $res['TransactionAccount'] = $this->transactionAccount;
        }
        if (null !== $this->transactionChannel) {
            $res['TransactionChannel'] = $this->transactionChannel;
        }
        if (null !== $this->transactionChannelSN) {
            $res['TransactionChannelSN'] = $this->transactionChannelSN;
        }
        if (null !== $this->transactionFlow) {
            $res['TransactionFlow'] = $this->transactionFlow;
        }
        if (null !== $this->transactionNumber) {
            $res['TransactionNumber'] = $this->transactionNumber;
        }
        if (null !== $this->transactionTime) {
            $res['TransactionTime'] = $this->transactionTime;
        }
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountTransactionsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['TransactionAccount'])) {
            $model->transactionAccount = $map['TransactionAccount'];
        }
        if (isset($map['TransactionChannel'])) {
            $model->transactionChannel = $map['TransactionChannel'];
        }
        if (isset($map['TransactionChannelSN'])) {
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if (isset($map['TransactionFlow'])) {
            $model->transactionFlow = $map['TransactionFlow'];
        }
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['TransactionTime'])) {
            $model->transactionTime = $map['TransactionTime'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }

        return $model;
    }
}
