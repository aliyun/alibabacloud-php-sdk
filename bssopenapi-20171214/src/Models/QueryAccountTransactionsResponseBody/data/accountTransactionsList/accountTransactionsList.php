<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponseBody\data\accountTransactionsList;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model
{
    /**
     * @description The amount.
     *
     * @example 0
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
     * @description The billing cycle. Format: YYYY-MM.
     *
     * @example 2020-03
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The type of transaction payment. Valid values:
     *
     *   Cash: pay for the transaction in cash.
     *   Deposit: pay for the transaction with deposit.
     *   RegularBankCreditRefund: pay for the transaction with credit refund controlled by a bank.
     *   DirectPay: directly pay for the transaction.
     *
     * @example Cash
     *
     * @var string
     */
    public $fundType;

    /**
     * @description The number of the order or bill.
     *
     * @example 2020030242
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The remarks on the transaction.
     *
     * @example NAT_GW
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The transaction account. For example, the account is a recharge account in Alipay or a transfer account.
     *
     * @example 213562146
     *
     * @var string
     */
    public $transactionAccount;

    /**
     * @description The transaction channel.
     *
     *   AccountBalance
     *   BankTransfer
     *   Alipay
     *   AntCreditPay
     *   OfflineRemittance
     *   RegularBankCreditRefund
     *   CreditCard
     *   MyBankCredit
     *   HuaxiaBankCInstallment
     *   ApplePay
     *
     * @example AccountBalance
     *
     * @var string
     */
    public $transactionChannel;

    /**
     * @description The serial number of the transaction channel.
     *
     * @example 1234354325
     *
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description The type of the transaction flow.
     *
     *   Income
     *   Expense
     *
     * @example Expense
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
     * @example 2020-03-10T02:03:20Z
     *
     * @var string
     */
    public $transactionTime;

    /**
     * @description The type of the transaction.
     *
     *   Payment
     *   Withdraw
     *   Refund
     *   Consumption
     *   Transfer
     *   Adjust
     *
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
