<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class StopTairKVCacheCustomInstanceResponseBody extends Model
{
    /**
     * @example tc-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 20C8341E-B5AD-4B24-BD82-D73241522ABF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 578678678
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
     * @return StopTairKVCacheCustomInstanceResponseBody
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
