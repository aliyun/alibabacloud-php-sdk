<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetFundAccountTransactionDetailsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $billNumber;

    /**
     * @var string
     */
    public $channelTransactionNumber;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $fundAccountId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $transactionChannelListShrink;

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
    public $transactionType;

    /**
     * @var string
     */
    public $transactionTypeListShrink;
    protected $_name = [
        'billNumber' => 'BillNumber',
        'channelTransactionNumber' => 'ChannelTransactionNumber',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'fundAccountId' => 'FundAccountId',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'transactionChannelListShrink' => 'TransactionChannelList',
        'transactionDirection' => 'TransactionDirection',
        'transactionNumber' => 'TransactionNumber',
        'transactionType' => 'TransactionType',
        'transactionTypeListShrink' => 'TransactionTypeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->transactionChannelListShrink) {
            $res['TransactionChannelList'] = $this->transactionChannelListShrink;
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

        if (null !== $this->transactionTypeListShrink) {
            $res['TransactionTypeList'] = $this->transactionTypeListShrink;
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
            $model->transactionChannelListShrink = $map['TransactionChannelList'];
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
            $model->transactionTypeListShrink = $map['TransactionTypeList'];
        }

        return $model;
    }
}
