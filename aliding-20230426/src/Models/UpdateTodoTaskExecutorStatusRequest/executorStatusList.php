<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest;

use AlibabaCloud\Tea\Model;

class executorStatusList extends Model
{
    /**
     * @example userId
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDone;
    protected $_name = [
        'id'     => 'id',
        'isDone' => 'isDone',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return executorStatusList
     */
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
