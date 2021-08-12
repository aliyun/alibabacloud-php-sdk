<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $transactionChannel;

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
    public $amount;

    /**
     * @var string
     */
    public $transactionAccount;

    /**
     * @var string
     */
    public $transactionTime;

    /**
     * @var string
     */
    public $transactionType;

    /**
     * @var string
     */
    public $transactionFlow;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @var string
     */
    public $transactionNumber;

    /**
     * @var string
     */
    public $balance;
    protected $_name = [
        'billingCycle'         => 'BillingCycle',
        'transactionChannel'   => 'TransactionChannel',
        'recordID'             => 'RecordID',
        'remarks'              => 'Remarks',
        'amount'               => 'Amount',
        'transactionAccount'   => 'TransactionAccount',
        'transactionTime'      => 'TransactionTime',
        'transactionType'      => 'TransactionType',
        'transactionFlow'      => 'TransactionFlow',
        'fundType'             => 'FundType',
        'transactionChannelSN' => 'TransactionChannelSN',
        'transactionNumber'    => 'TransactionNumber',
        'balance'              => 'Balance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->transactionChannel) {
            $res['TransactionChannel'] = $this->transactionChannel;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->transactionAccount) {
            $res['TransactionAccount'] = $this->transactionAccount;
        }
        if (null !== $this->transactionTime) {
            $res['TransactionTime'] = $this->transactionTime;
        }
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }
        if (null !== $this->transactionFlow) {
            $res['TransactionFlow'] = $this->transactionFlow;
        }
        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }
        if (null !== $this->transactionChannelSN) {
            $res['TransactionChannelSN'] = $this->transactionChannelSN;
        }
        if (null !== $this->transactionNumber) {
            $res['TransactionNumber'] = $this->transactionNumber;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['TransactionChannel'])) {
            $model->transactionChannel = $map['TransactionChannel'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['TransactionAccount'])) {
            $model->transactionAccount = $map['TransactionAccount'];
        }
        if (isset($map['TransactionTime'])) {
            $model->transactionTime = $map['TransactionTime'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }
        if (isset($map['TransactionFlow'])) {
            $model->transactionFlow = $map['TransactionFlow'];
        }
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }
        if (isset($map['TransactionChannelSN'])) {
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }

        return $model;
    }
}
