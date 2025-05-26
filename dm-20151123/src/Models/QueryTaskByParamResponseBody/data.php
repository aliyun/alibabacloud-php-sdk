<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponseBody\data\task;

class data extends Model
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
                $res['task'] = [];
                $n1 = 0;
                foreach ($this->task as $item1) {
                    $res['task'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['task'])) {
            if (!empty($map['task'])) {
                $model->task = [];
                $n1 = 0;
                foreach ($map['task'] as $item1) {
                    $model->task[$n1++] = task::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
