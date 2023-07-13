<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class ApplyNodesResponseBody extends Model
{
    /**
     * @description The detailed result of the request.
     *
     * @example Resources Application is satisfied. Creating...
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * >  AddNodes is an asynchronous API operation. If a request succeeds, a response is immediately generated before ECS instances are created. Therefore, the value of the parameter is null. You can call the [ListNodes](~~87161~~) operation to query the ID of the ECS instance.
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
     * @description The number of the compute nodes that were created.
     *
     * @example 10
     *
     * @var int
     */
    public $satisfiedAmount;

    /**
     * @description The ID of the task.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'detail'          => 'Detail',
        'instanceIds'     => 'InstanceIds',
        'requestId'       => 'RequestId',
        'satisfiedAmount' => 'SatisfiedAmount',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->satisfiedAmount) {
            $res['SatisfiedAmount'] = $this->satisfiedAmount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SatisfiedAmount'])) {
            $model->satisfiedAmount = $map['SatisfiedAmount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
