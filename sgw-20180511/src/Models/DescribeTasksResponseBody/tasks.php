<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeTasksResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeTasksResponseBody\tasks\simpleTask;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var simpleTask[]
     */
    public $simpleTask;
    protected $_name = [
        'simpleTask' => 'SimpleTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleTask) {
            $res['SimpleTask'] = [];
            if (null !== $this->simpleTask && \is_array($this->simpleTask)) {
                $n = 0;
                foreach ($this->simpleTask as $item) {
                    $res['SimpleTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SimpleTask'])) {
            if (!empty($map['SimpleTask'])) {
                $model->simpleTask = [];
                $n                 = 0;
                foreach ($map['SimpleTask'] as $item) {
                    $model->simpleTask[$n++] = null !== $item ? simpleTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
