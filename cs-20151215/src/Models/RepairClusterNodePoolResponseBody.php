<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RepairClusterNodePoolResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example db82195b-75a8-40e5-9be4-16f1829dc624
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example T-613b19bbd160ad4928000001
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'request_id',
        'taskId'    => 'task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return RepairClusterNodePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
