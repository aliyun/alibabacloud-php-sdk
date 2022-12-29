<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeResponseBody extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example d-bp1b234bf7a4****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the order.
     *
     * @example 20951063702****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 7D48FB19-20CA-4725-A870-3D8F5CE6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeId'    => 'NodeId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
