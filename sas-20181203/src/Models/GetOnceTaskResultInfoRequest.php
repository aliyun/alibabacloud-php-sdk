<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOnceTaskResultInfoRequest extends Model
{
    /**
     * @description The number of tasks that were completed.
     *
     * @example 9dfa3a7eb9547781632785b49003****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The ID of the scan task.
     *
     * @example ASSETS_COLLECTION
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The total number of entries returned.
     *
     * @example ASSETS_COLLECTION
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskId'   => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnceTaskResultInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
