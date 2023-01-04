<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateHubClusterResponseBody extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c09946603cd764dac96135f51d1ba****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request.
     *
     * @example 62F5AA2B-A2C9-5135-BCE2-C21670998D01
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example T-62523eda841eca071400****
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
     * @return CreateHubClusterResponseBody
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
