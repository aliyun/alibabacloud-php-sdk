<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountTransactionsRequest extends Model
{
    /**
     * @var string
     */
    public $transactionNumber;

    /**
     * @var string
     */
    public $recordID;

    /**
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'transactionNumber'    => 'TransactionNumber',
        'recordID'             => 'RecordID',
        'transactionChannelSN' => 'TransactionChannelSN',
        'createTimeStart'      => 'CreateTimeStart',
        'createTimeEnd'        => 'CreateTimeEnd',
        'pageNum'              => 'PageNum',
        'pageSize'             => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionNumber) {
            $res['TransactionNumber'] = $this->transactionNumber;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->transactionChannelSN) {
            $res['TransactionChannelSN'] = $this->transactionChannelSN;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['TransactionChannelSN'])) {
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
