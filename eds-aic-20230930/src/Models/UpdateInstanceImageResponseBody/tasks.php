<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageResponseBody\tasks\childTasks;

class tasks extends Model
{
    /**
     * @var childTasks[]
     */
    public $childTasks;

    /**
     * @var string
     */
    public $parentTaskId;
    protected $_name = [
        'childTasks' => 'ChildTasks',
        'parentTaskId' => 'ParentTaskId',
    ];

    public function validate()
    {
        if (\is_array($this->childTasks)) {
            Model::validateArray($this->childTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childTasks) {
            if (\is_array($this->childTasks)) {
                $res['ChildTasks'] = [];
                $n1 = 0;
                foreach ($this->childTasks as $item1) {
                    $res['ChildTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
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
        if (isset($map['ChildTasks'])) {
            if (!empty($map['ChildTasks'])) {
                $model->childTasks = [];
                $n1 = 0;
                foreach ($map['ChildTasks'] as $item1) {
                    $model->childTasks[$n1] = childTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }

        return $model;
    }
}
