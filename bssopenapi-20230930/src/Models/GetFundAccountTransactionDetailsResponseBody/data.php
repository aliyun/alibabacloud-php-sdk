<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountTransactionDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $balance;

    /**
     * @var string
     */
    public $billNumber;

    /**
     * @var string
     */
    public $channelTransactionNumber;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $fundAccountEcid;

    /**
     * @var int
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $fundAccountName;

    /**
     * @var int
     */
    public $fundAccountOwnerAccountId;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $transactionAccount;

    /**
     * @var string
     */
    public $transactionAmount;

    /**
     * @var string
     */
    public $transactionChannel;

    /**
     * @var string
     */
    public $transactionDirection;

    /**
     * @var int
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
        'balance' => 'Balance',
        'billNumber' => 'BillNumber',
        'channelTransactionNumber' => 'ChannelTransactionNumber',
        'currency' => 'Currency',
        'fundAccountEcid' => 'FundAccountEcid',
        'fundAccountId' => 'FundAccountId',
        'fundAccountName' => 'FundAccountName',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'fundType' => 'FundType',
        'nbid' => 'Nbid',
        'remark' => 'Remark',
        'site' => 'Site',
        'transactionAccount' => 'TransactionAccount',
        'transactionAmount' => 'TransactionAmount',
        'transactionChannel' => 'TransactionChannel',
        'transactionDirection' => 'TransactionDirection',
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
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }

        if (null !== $this->billNumber) {
            $res['BillNumber'] = $this->billNumber;
        }

        if (null !== $this->channelTransactionNumber) {
            $res['ChannelTransactionNumber'] = $this->channelTransactionNumber;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->fundAccountEcid) {
            $res['FundAccountEcid'] = $this->fundAccountEcid;
        }

        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        if (null !== $this->fundAccountName) {
            $res['FundAccountName'] = $this->fundAccountName;
        }

        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }

        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        if (null !== $this->transactionAccount) {
            $res['TransactionAccount'] = $this->transactionAccount;
        }

        if (null !== $this->transactionAmount) {
            $res['TransactionAmount'] = $this->transactionAmount;
        }

        if (null !== $this->transactionChannel) {
            $res['TransactionChannel'] = $this->transactionChannel;
        }

        if (null !== $this->transactionDirection) {
            $res['TransactionDirection'] = $this->transactionDirection;
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
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }

        if (isset($map['BillNumber'])) {
            $model->billNumber = $map['BillNumber'];
        }

        if (isset($map['ChannelTransactionNumber'])) {
            $model->channelTransactionNumber = $map['ChannelTransactionNumber'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['FundAccountEcid'])) {
            $model->fundAccountEcid = $map['FundAccountEcid'];
        }

        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        if (isset($map['FundAccountName'])) {
            $model->fundAccountName = $map['FundAccountName'];
        }

        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }

        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        if (isset($map['TransactionAccount'])) {
            $model->transactionAccount = $map['TransactionAccount'];
        }

        if (isset($map['TransactionAmount'])) {
            $model->transactionAmount = $map['TransactionAmount'];
        }

        if (isset($map['TransactionChannel'])) {
            $model->transactionChannel = $map['TransactionChannel'];
        }

        if (isset($map['TransactionDirection'])) {
            $model->transactionDirection = $map['TransactionDirection'];
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
