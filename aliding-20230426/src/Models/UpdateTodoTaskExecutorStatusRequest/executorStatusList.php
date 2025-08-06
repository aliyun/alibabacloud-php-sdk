<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest;

use AlibabaCloud\Dara\Model;

class executorStatusList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isDone;
    protected $_name = [
        'id' => 'id',
        'isDone' => 'isDone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isDone'])) {
            $model->isDone = $map['isDone'];
        }

        return $model;
    }
}
