<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeIllegalUrlExportTaskRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the task. You can call the [CreateIllegalUrlExportTask](~~156492~~) operation to query task IDs.
     *
     * @example tu_4b37ea97_a7fa_4d36_b363_061c1f****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'taskId'  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIllegalUrlExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
