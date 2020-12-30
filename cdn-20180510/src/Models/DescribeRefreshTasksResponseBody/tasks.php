<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponseBody\tasks\CDNTask;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var CDNTask[]
     */
    public $CDNTask;
    protected $_name = [
        'CDNTask' => 'CDNTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CDNTask) {
            $res['CDNTask'] = [];
            if (null !== $this->CDNTask && \is_array($this->CDNTask)) {
                $n = 0;
                foreach ($this->CDNTask as $item) {
                    $res['CDNTask'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CDNTask'])) {
            if (!empty($map['CDNTask'])) {
                $model->CDNTask = [];
                $n              = 0;
                foreach ($map['CDNTask'] as $item) {
                    $model->CDNTask[$n++] = null !== $item ? CDNTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
