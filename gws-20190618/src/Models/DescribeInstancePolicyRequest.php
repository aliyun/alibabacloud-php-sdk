<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $asyncMode;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'taskId'     => 'TaskId',
        'asyncMode'  => 'AsyncMode',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }

        return $model;
    }
}
