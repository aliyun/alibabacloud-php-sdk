<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountTransactionDetailsRequest extends Model
{
    /**
     * @description The end of the creation time range to query.
     *
     * @example 2022-12-20
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description The beginning of the creation time range to query.
     *
     * @example 2022-01-20
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description This parameter is invalid.
     *
     * @example 0
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for paging.
     *
     * @example ABEDSDS124DASA
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the order or bill.
     *
     * @example 2022120336190912
     *
     * @var string
     */
    public $recordID;

    /**
     * @description The transaction channel.
     *
     * @example ALIPAY
     *
     * @var string
     */
    public $transactionChannel;

    /**
     * @description The serial number of the transaction channel.
     *
     * @example 2022112122001470591458665933
     *
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description The number of the transaction.
     *
     * @example 410874027490089
     *
     * @var string
     */
    public $transactionNumber;

    /**
     * @description The type of the transaction.
     *
     * @example CHARGE
     *
     * @var string
     */
    public $transactionType;
    protected $_name = [
        'createTimeEnd'        => 'CreateTimeEnd',
        'createTimeStart'      => 'CreateTimeStart',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'recordID'             => 'RecordID',
        'transactionChannel'   => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return QueryAccountTransactionDetailsRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }

        return $model;
    }
}
