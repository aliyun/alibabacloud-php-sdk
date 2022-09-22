<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeOrderAutoRebootTimeResponseBody;

use AlibabaCloud\Tea\Model;

class describeOrderAutoRebootTimeInfo extends Model
{
    /**
     * @var string
     */
    public $autoRebootTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'autoRebootTime' => 'AutoRebootTime',
        'instanceId'     => 'InstanceId',
        'orderId'        => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRebootTime) {
            $res['AutoRebootTime'] = $this->autoRebootTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeOrderAutoRebootTimeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRebootTime'])) {
            $model->autoRebootTime = $map['AutoRebootTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
