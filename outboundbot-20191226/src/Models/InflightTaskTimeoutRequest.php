<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class InflightTaskTimeoutRequest extends Model
{
    /**
     * @example 2d350e38-f561-49b0-85d3-b90d9fc7e052
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1864632921948620
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @example 6bc0585c-0a8a-46d8-b042-23570bbb4855
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
        'taskId'          => 'TaskId',
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
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InflightTaskTimeoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
