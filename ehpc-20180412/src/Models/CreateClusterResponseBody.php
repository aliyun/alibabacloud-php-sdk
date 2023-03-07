<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterResponseBody extends Model
{
    /**
     * @description The ID of the E-HPC cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request.
     *
     * @example F6757FA4-8FED-4602-B7F5-3550C084****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * >  CreateCluster is an asynchronous API operation. If a request succeeds, a response is immediately generated before nodes are created. You can call the [ListTasks](~~268225~~) operation to query the result of the task.
     * @example F6757FA4-8FED-4602-B7F5-3550C084****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
     * @return CreateClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
