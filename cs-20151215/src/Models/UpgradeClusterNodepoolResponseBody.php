<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterNodepoolResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 2D69A58F-345C-4FDE-88E4-BF518944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example T-5fd211e924e1d0078700xxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId'    => 'task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClusterNodepoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
