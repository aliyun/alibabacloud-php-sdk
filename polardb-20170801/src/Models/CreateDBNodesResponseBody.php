<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponseBody\DBNodeIds;
use AlibabaCloud\Tea\Model;

class CreateDBNodesResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-***************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Details about the nodes.
     *
     * @var DBNodeIds
     */
    public $DBNodeIds;

    /**
     * @description The ID of the order.
     *
     * @example 2148126708*****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example E053E730-5755-4AA9-AA9D-A47867******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBNodeIds'   => 'DBNodeIds',
        'orderId'     => 'OrderId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = null !== $this->DBNodeIds ? $this->DBNodeIds->toMap() : null;
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
     * @return CreateDBNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBNodeIds'])) {
            $model->DBNodeIds = DBNodeIds::fromMap($map['DBNodeIds']);
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
