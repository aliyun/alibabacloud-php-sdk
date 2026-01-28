<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchDeletePracticeTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $taskIdsShrink;
    protected $_name = [
        'idempotentId' => 'idempotentId',
        'taskIdsShrink' => 'taskIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }

        if (null !== $this->taskIdsShrink) {
            $res['taskIds'] = $this->taskIdsShrink;
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
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }

        if (isset($map['taskIds'])) {
            $model->taskIdsShrink = $map['taskIds'];
        }

        return $model;
    }
}
