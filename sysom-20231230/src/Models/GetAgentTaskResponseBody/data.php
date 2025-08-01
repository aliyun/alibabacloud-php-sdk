<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentTaskResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentTaskResponseBody\data\jobs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'jobs' => 'jobs',
        'taskId' => 'task_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (isset($map['jobs'])) {
            if (!empty($map['jobs'])) {
                $model->jobs = [];
                $n = 0;
                foreach ($map['jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
