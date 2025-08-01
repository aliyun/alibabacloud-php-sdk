<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentForClusterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 7523e9e0ddc74d99a5236f4f4d5056e6
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'task_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
