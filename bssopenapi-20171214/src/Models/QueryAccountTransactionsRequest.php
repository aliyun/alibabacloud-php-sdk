<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class QueryAccountTransactionsRequest extends Model
{
    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $recordID;

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
    public $transactionType;
    protected $_name = [
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'recordID' => 'RecordID',
        'transactionChannel' => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'transactionFlow' => 'TransactionFlow',
        'transactionNumber' => 'TransactionNumber',
        'transactionType' => 'TransactionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
