<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveNodePoolNodesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example A9891419-D125-4D89-AFCA-68846675E2F7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example T-62a944794ee141074400****
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
     * @return RemoveNodePoolNodesResponseBody
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
