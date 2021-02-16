<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponseBody\DBNodeIds;
use AlibabaCloud\Tea\Model;

class CreateDBNodesResponseBody extends Model
{
    /**
     * @var DBNodeIds
     */
    public $DBNodeIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'DBNodeIds'   => 'DBNodeIds',
        'requestId'   => 'RequestId',
        'DBClusterId' => 'DBClusterId',
        'orderId'     => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = null !== $this->DBNodeIds ? $this->DBNodeIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['DBNodeIds'])) {
            $model->DBNodeIds = DBNodeIds::fromMap($map['DBNodeIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
