<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class NotifyPayOrderStatusRequest extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $amount;

    /**
     * @example 5781******290561
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2022-04-01 12:00:00
     *
     * @var string
     */
    public $operationDate;

    /**
     * @example ""
     *
     * @var string
     */
    public $payTypes;

    /**
     * @example 1718921E-C8D4-55E1-B8D4-114AE537C1B7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'amount'        => 'Amount',
        'channelId'     => 'ChannelId',
        'operationDate' => 'OperationDate',
        'payTypes'      => 'PayTypes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->operationDate) {
            $res['OperationDate'] = $this->operationDate;
        }
        if (null !== $this->payTypes) {
            $res['PayTypes'] = $this->payTypes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyPayOrderStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OperationDate'])) {
            $model->operationDate = $map['OperationDate'];
        }
        if (isset($map['PayTypes'])) {
            $model->payTypes = $map['PayTypes'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
