<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMemoryTasksResponseBody\items;

use AlibabaCloud\Dara\Model;

class changes extends Model
{
    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'memoryId' => 'memoryId',
        'operation' => 'operation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
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
        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        return $model;
    }
}
