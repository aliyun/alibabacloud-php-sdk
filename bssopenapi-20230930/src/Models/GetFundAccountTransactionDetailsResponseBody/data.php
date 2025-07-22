<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountTransactionDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var string
     */
    public $balance;

    /**
     * @example 2323203243
     *
     * @var string
     */
    public $billNumber;

    /**
     * @example 20244389232
     *
     * @var string
     */
    public $channelTransactionNumber;

    /**
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @example 23473943
     *
     * @var string
     */
    public $fundAccountEcid;

    /**
     * @example 1232121
     *
     * @var int
     */
    public $fundAccountId;

    /**
     * @example 云某的名称
     *
     * @var string
     */
    public $fundAccountName;

    /**
     * @example 32343231
     *
     * @var int
     */
    public $fundAccountOwnerAccountId;

    /**
     * @example ACCT_BOOK
     *
     * @var string
     */
    public $fundType;

    /**
     * @example 2684210001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example 订单备注
     *
     * @var string
     */
    public $remark;

    /**
     * @example 26842
     *
     * @var string
     */
    public $site;

    /**
     * @example 186****3975
     *
     * @var string
     */
    public $transactionAccount;

    /**
     * @example 10
     *
     * @var string
     */
    public $transactionAmount;

    /**
     * @example ALIPAY
     *
     * @var string
     */
    public $transactionChannel;

    /**
     * @example IN
     *
     * @var string
     */
    public $transactionDirection;

    /**
     * @example 5423121
     *
     * @var int
     */
    public $transactionNumber;

    /**
     * @example 2024-12-01 12:00:00
     *
     * @var string
     */
    public $transactionTime;

    /**
     * @example CHARGE
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
