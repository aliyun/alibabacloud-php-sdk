<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The task status. Valid values:
     *
     * - INIT: The task is in the initial state.
     * - RELEASE: The task is being parsed.
     * - RUNNING: The task is running.
     * - STOP: The task is suspended.
     * - SYSTEM_STOP: The task is suspended by the system.
     * - CANCEL: The task is canceled.
     * - SYSTEM_CANCEL: The task is canceled by the system.
     * - DONE: The task is complete.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 5308a2691f59422c8c3b7aeccec9cd3b
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
