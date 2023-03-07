<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountTransactionsRequest extends Model
{
    /**
     * @description The end of the creation time range to query. By default, the transactions in the last month are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. Example: 2018-01-01T00:00:00Z.
     *
     * @example 2020-03-06T01:55:00Z
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description The beginning of the creation time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. Example: 2018-01-01T00:00:00Z.
     *
     * @example 2020-03-05T01:46:09Z
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the order or bill.
     *
     * @example 20200302
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The transaction channel. If you specify one of the following transaction channels for this parameter, the results for the specified transaction channel are returned. If the transaction channel that you specify does not belong to the following transaction channels, no result is returned. If you leave this parameter empty, the results for all the following transaction channels are returned by default. Valid values:
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
     * @example 12342134
     *
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description The type of the transaction flow. If you specify one of the following types for this parameter, the results for the specified type are returned. If the type that you specify does not belong to the following types, no result is returned. If you leave this parameter empty, the results for the following two types are returned by default. Valid values:
     *
     *   Income
     *   Expense
     *
     * @example Income
     *
     * @var string
     */
    public $transactionFlow;

    /**
     * @description The number of the transaction.
     *
     * @example 133314076
     *
     * @var string
     */
    public $transactionNumber;

    /**
     * @description The type of the transaction. If you specify one of the following transaction types for this parameter, the results for the specified transaction type are returned. If the transaction type that you specify does not belong to the following types, no result is returned. If you leave this parameter empty, the results for all the following transaction types are returned by default. Valid values:
     *
     *   Payment
     *   Withdraw
     *   Refund
     *   Consumption
     *   Transfer
     *   Adjust
     *
     * @example Payment
     *
     * @var string
     */
    public $transactionType;
    protected $_name = [
        'createTimeEnd'        => 'CreateTimeEnd',
        'createTimeStart'      => 'CreateTimeStart',
        'pageNum'              => 'PageNum',
        'pageSize'             => 'PageSize',
        'recordID'             => 'RecordID',
        'transactionChannel'   => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'transactionFlow'      => 'TransactionFlow',
        'transactionNumber'    => 'TransactionNumber',
        'transactionType'      => 'TransactionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
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
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAccountTransactionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
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
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }

        return $model;
    }
}
