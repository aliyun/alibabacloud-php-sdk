<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetProjectTaskRequest extends Model
{
    /**
     * @example 20230823218109326025-1200
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example 313123123
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'idempotentId' => 'IdempotentId',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
