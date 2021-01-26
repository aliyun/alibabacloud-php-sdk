<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\taskResult\task;
use AlibabaCloud\Tea\Model;

class taskResult extends Model
{
    /**
     * @var task[]
     */
    public $task;
    protected $_name = [
        'task' => 'task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->task) {
            $res['task'] = [];
            if (null !== $this->task && \is_array($this->task)) {
                $n = 0;
                foreach ($this->task as $item) {
                    $res['task'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['task'])) {
            if (!empty($map['task'])) {
                $model->task = [];
                $n           = 0;
                foreach ($map['task'] as $item) {
                    $model->task[$n++] = null !== $item ? task::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
