<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBNodesResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-2ze450g4ctg6t****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the created node. The value is a string. Multiple values are separated by commas (`,`).
     *
     * @example rn-abcd2*****
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description The ID of the order.
     *
     * @example 2133400000*****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 7A41C147-C8D0-4DAE-A1A2-17EBCD60DFA1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'nodeIds'      => 'NodeIds',
        'orderId'      => 'OrderId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
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
     * @return CreateDBNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
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
