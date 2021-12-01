<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskReplicaPairResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $replicaPairId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId'       => 'OrderId',
        'replicaPairId' => 'ReplicaPairId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskReplicaPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
