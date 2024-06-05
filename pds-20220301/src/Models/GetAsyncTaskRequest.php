<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskRequest extends Model
{
    /**
     * @description The ID of the asynchronous task.
     *
     * This parameter is required.
     * @example 000e89fb-cf8f-11e9-8ab4-b6e980803a3b
     *
     * @var string
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'async_task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['async_task_id'] = $this->asyncTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }

        return $model;
    }
}
