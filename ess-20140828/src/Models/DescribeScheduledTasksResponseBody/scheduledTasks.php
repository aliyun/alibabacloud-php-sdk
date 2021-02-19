<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksResponseBody\scheduledTasks\scheduledTask;
use AlibabaCloud\Tea\Model;

class scheduledTasks extends Model
{
    /**
     * @var scheduledTask[]
     */
    public $scheduledTask;
    protected $_name = [
        'scheduledTask' => 'ScheduledTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduledTask) {
            $res['ScheduledTask'] = [];
            if (null !== $this->scheduledTask && \is_array($this->scheduledTask)) {
                $n = 0;
                foreach ($this->scheduledTask as $item) {
                    $res['ScheduledTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduledTask'])) {
            if (!empty($map['ScheduledTask'])) {
                $model->scheduledTask = [];
                $n                    = 0;
                foreach ($map['ScheduledTask'] as $item) {
                    $model->scheduledTask[$n++] = null !== $item ? scheduledTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
