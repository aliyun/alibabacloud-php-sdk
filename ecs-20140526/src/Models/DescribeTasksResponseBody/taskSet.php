<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody\taskSet\task;

class taskSet extends Model
{
    /**
     * @var task[]
     */
    public $task;
    protected $_name = [
        'task' => 'Task',
    ];

    public function validate()
    {
        if (\is_array($this->task)) {
            Model::validateArray($this->task);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->task) {
            if (\is_array($this->task)) {
                $res['Task'] = [];
                $n1 = 0;
                foreach ($this->task as $item1) {
                    $res['Task'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n1 = 0;
                foreach ($map['Task'] as $item1) {
                    $model->task[$n1] = task::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
