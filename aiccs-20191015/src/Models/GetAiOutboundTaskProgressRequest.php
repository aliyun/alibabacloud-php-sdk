<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetAiOutboundTaskProgressRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchVersion;

    /**
     * @description This parameter is required.
     *
     * @example agent_***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchVersion' => 'BatchVersion',
        'instanceId'   => 'InstanceId',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchVersion) {
            $res['BatchVersion'] = $this->batchVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAiOutboundTaskProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchVersion'])) {
            $model->batchVersion = $map['BatchVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
