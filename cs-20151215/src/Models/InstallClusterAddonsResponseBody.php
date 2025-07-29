<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class InstallClusterAddonsResponseBody extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c82e6987e2961451182edacd74faf****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 请求ID。
     *
     * @example 687C5BAA-D103-4993-884B-C35E4314****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 任务ID。
     *
     * @example T-5a54309c80282e39ea0****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'requestId' => 'request_id',
        'taskId' => 'task_id',
    ];

    public function validate() {}

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
     * @return InstallClusterAddonsResponseBody
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
