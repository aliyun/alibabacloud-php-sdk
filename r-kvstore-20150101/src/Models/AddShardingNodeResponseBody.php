<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class AddShardingNodeResponseBody extends Model
{
    /**
     * @description The IDs of the data shards.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The ID of the order.
     *
     * @example 20741011111111
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example B79C1A90-495B-4E99-A2AA-A4DB13B8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeIds'   => 'NodeIds',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
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
     * @return AddShardingNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
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
