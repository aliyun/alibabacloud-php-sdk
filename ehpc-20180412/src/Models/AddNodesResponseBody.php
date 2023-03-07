<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class AddNodesResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  AddNodes is an asynchronous API operation. If a request succeeds, a response is immediately generated before ECS instances are created. Therefore, the value of the parameter is null. You can call the [ListNodes](~~87161~~) operation to obtain the IDs of the ECS instances.
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @description The ID of the request.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'requestId'   => 'RequestId',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
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
     * @return AddNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
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
