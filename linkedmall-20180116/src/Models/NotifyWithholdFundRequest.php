<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class NotifyWithholdFundRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $operationDate;

    /**
     * @var string
     */
    public $payTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tenantOrderId;
    protected $_name = [
        'amount'        => 'Amount',
        'channelId'     => 'ChannelId',
        'operationDate' => 'OperationDate',
        'payTypes'      => 'PayTypes',
        'requestId'     => 'RequestId',
        'tenantOrderId' => 'TenantOrderId',
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
        if (null !== $this->tenantOrderId) {
            $res['TenantOrderId'] = $this->tenantOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyWithholdFundRequest
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
        if (isset($map['TenantOrderId'])) {
            $model->tenantOrderId = $map['TenantOrderId'];
        }

        return $model;
    }
}
