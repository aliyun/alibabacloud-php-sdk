<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteUsageDetailDataExportTaskRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the task. You can call the [DescribeUserUsageDataExportTask](~~91062~~) operation to query the most recent task list.
     *
     * @example 10
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
     * @return DeleteUsageDetailDataExportTaskRequest
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
