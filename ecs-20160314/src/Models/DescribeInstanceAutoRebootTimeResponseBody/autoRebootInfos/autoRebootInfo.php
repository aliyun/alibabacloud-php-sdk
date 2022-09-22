<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeResponseBody\autoRebootInfos;

use AlibabaCloud\Tea\Model;

class autoRebootInfo extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $limitRebootTime;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $rebootTime;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'limitRebootTime' => 'LimitRebootTime',
        'orderType'       => 'OrderType',
        'rebootTime'      => 'RebootTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->limitRebootTime) {
            $res['LimitRebootTime'] = $this->limitRebootTime;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->rebootTime) {
            $res['RebootTime'] = $this->rebootTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRebootInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LimitRebootTime'])) {
            $model->limitRebootTime = $map['LimitRebootTime'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RebootTime'])) {
            $model->rebootTime = $map['RebootTime'];
        }

        return $model;
    }
}
