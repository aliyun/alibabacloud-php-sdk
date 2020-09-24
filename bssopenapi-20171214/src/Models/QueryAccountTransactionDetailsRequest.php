<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountTransactionDetailsRequest extends Model
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
     * @var string
     */
    public $transactionType;

    /**
     * @var string
     */
    public $transactionChannel;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'transactionNumber'    => 'TransactionNumber',
        'recordID'             => 'RecordID',
        'transactionChannelSN' => 'TransactionChannelSN',
        'createTimeStart'      => 'CreateTimeStart',
        'createTimeEnd'        => 'CreateTimeEnd',
        'transactionType'      => 'TransactionType',
        'transactionChannel'   => 'TransactionChannel',
        'nextToken'            => 'NextToken',
        'maxResults'           => 'MaxResults',
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
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }
        if (null !== $this->transactionChannel) {
            $res['TransactionChannel'] = $this->transactionChannel;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAccountTransactionDetailsRequest
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
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }
        if (isset($map['TransactionChannel'])) {
            $model->transactionChannel = $map['TransactionChannel'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
