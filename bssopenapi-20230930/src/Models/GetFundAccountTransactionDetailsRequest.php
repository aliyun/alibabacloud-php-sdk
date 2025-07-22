<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetFundAccountTransactionDetailsRequest extends Model
{
    /**
     * @example 2023212312321
     *
     * @var string
     */
    public $billNumber;

    /**
     * @example 20250312334312322
     *
     * @var string
     */
    public $channelTransactionNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1735664561000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 123221232
     *
     * @var int
     */
    public $fundAccountId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1735664461000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $transactionChannelList;

    /**
     * @example IN
     *
     * @var string
     */
    public $transactionDirection;

    /**
     * @example 543231231
     *
     * @var int
     */
    public $transactionNumber;

    /**
     * @example CHARGE
     *
     * @var string
     */
    public $transactionType;

    /**
     * @var string[]
     */
    public $transactionTypeList;
    protected $_name = [
        'billNumber' => 'BillNumber',
        'channelTransactionNumber' => 'ChannelTransactionNumber',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'fundAccountId' => 'FundAccountId',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'transactionChannelList' => 'TransactionChannelList',
        'transactionDirection' => 'TransactionDirection',
        'transactionNumber' => 'TransactionNumber',
        'transactionType' => 'TransactionType',
        'transactionTypeList' => 'TransactionTypeList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billNumber) {
            $res['BillNumber'] = $this->billNumber;
        }
        if (null !== $this->channelTransactionNumber) {
            $res['ChannelTransactionNumber'] = $this->channelTransactionNumber;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->transactionChannelList) {
            $res['TransactionChannelList'] = $this->transactionChannelList;
        }
        if (null !== $this->transactionDirection) {
            $res['TransactionDirection'] = $this->transactionDirection;
        }
        if (null !== $this->transactionNumber) {
            $res['TransactionNumber'] = $this->transactionNumber;
        }
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }
        if (null !== $this->transactionTypeList) {
            $res['TransactionTypeList'] = $this->transactionTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFundAccountTransactionDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillNumber'])) {
            $model->billNumber = $map['BillNumber'];
        }
        if (isset($map['ChannelTransactionNumber'])) {
            $model->channelTransactionNumber = $map['ChannelTransactionNumber'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TransactionChannelList'])) {
            if (!empty($map['TransactionChannelList'])) {
                $model->transactionChannelList = $map['TransactionChannelList'];
            }
        }
        if (isset($map['TransactionDirection'])) {
            $model->transactionDirection = $map['TransactionDirection'];
        }
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }
        if (isset($map['TransactionTypeList'])) {
            if (!empty($map['TransactionTypeList'])) {
                $model->transactionTypeList = $map['TransactionTypeList'];
            }
        }

        return $model;
    }
}
