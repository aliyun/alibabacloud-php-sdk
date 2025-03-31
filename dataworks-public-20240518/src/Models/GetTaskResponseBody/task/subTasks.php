<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\subTasks\subTasks;

class subTasks extends Model
{
    /**
     * @var subTasks[]
     */
    public $subTasks;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'subTasks' => 'SubTasks',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->subTasks)) {
            Model::validateArray($this->subTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subTasks) {
            if (\is_array($this->subTasks)) {
                $res['SubTasks'] = [];
                $n1 = 0;
                foreach ($this->subTasks as $item1) {
                    $res['SubTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n1 = 0;
                foreach ($map['SubTasks'] as $item1) {
                    $model->subTasks[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
