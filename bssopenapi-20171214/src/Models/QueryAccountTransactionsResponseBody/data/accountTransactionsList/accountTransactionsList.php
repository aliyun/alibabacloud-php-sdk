<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponseBody\data\accountTransactionsList;

use AlibabaCloud\Dara\Model;

class accountTransactionsList extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $balance;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var string
     */
    public $recordID;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $transactionAccount;

    /**
     * @var string
     */
    public $transactionChannel;

    /**
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @var string
     */
    public $transactionFlow;

    /**
     * @var string
     */
    public $transactionNumber;

    /**
     * @var string
     */
    public $transactionTime;

    /**
     * @var string
     */
    public $transactionType;
    protected $_name = [
        'amount' => 'Amount',
        'balance' => 'Balance',
        'billingCycle' => 'BillingCycle',
        'fundType' => 'FundType',
        'recordID' => 'RecordID',
        'remarks' => 'Remarks',
        'transactionAccount' => 'TransactionAccount',
        'transactionChannel' => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'transactionFlow' => 'TransactionFlow',
        'transactionNumber' => 'TransactionNumber',
        'transactionTime' => 'TransactionTime',
        'transactionType' => 'TransactionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
