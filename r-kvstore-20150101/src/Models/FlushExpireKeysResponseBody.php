<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class FlushExpireKeysResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 82E30AB7-E3A4-46AC-88A0-3E4DCDC5****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 21986****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
        'taskId'     => 'TaskId',
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
     * @return FlushExpireKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
