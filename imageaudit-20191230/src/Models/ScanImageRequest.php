<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest\task;

class ScanImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $scene;

    /**
     * @var task[]
     */
    public $task;
    protected $_name = [
        'scene' => 'Scene',
        'task' => 'Task',
    ];

    public function validate()
    {
        if (\is_array($this->scene)) {
            Model::validateArray($this->scene);
        }
        if (\is_array($this->task)) {
            Model::validateArray($this->task);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scene) {
            if (\is_array($this->scene)) {
                $res['Scene'] = [];
                $n1 = 0;
                foreach ($this->scene as $item1) {
                    $res['Scene'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = [];
                $n1 = 0;
                foreach ($map['Scene'] as $item1) {
                    $model->scene[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
