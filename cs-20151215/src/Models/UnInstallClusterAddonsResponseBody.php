<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UnInstallClusterAddonsResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c5b5e80b0b64a4bf6939d2d8fbbc5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request.
     *
     * @example 74D1512F-67DA-54E8-99EA-4D50EB4898F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example T-66e39b39c0fdd001320005c0
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'requestId' => 'request_id',
        'taskId'    => 'task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnInstallClusterAddonsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
