<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example pgm-bp1gm3yh0ht1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the order.
     *
     * @example 21128667463****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 006729E5-2A33-5955-89E3-651D3F44EBE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A reserved parameter.
     *
     * @example 416980000
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'orderId'      => 'OrderId',
        'requestId'    => 'RequestId',
        'taskId'       => 'TaskId',
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
