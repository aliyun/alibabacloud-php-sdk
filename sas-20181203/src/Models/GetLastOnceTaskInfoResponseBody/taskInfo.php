<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @description The progress of the task in percentage.
     *
     * @example 69
     *
     * @var int
     */
    public $progress;

    /**
     * @description The result of the scan task. Valid values:
     *
     *   **SUCCESS**: The task is successful.
     *   **TASK_NOT_SUPPORT_REGION**: The images are deployed in a region that is not supported by container image scan.
     *   **TASK_NOT_EXISTS**: The task does not exist.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $result;

    /**
     * @description The status of the task. Valid values:
     *
     *   **INIT**: The task is not started.
     *   **START**: The task is started.
     *   **SUCCESS**: The task is complete.
     *   **TIMEOUT**: The task timed out.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'progress' => 'Progress',
        'result'   => 'Result',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
