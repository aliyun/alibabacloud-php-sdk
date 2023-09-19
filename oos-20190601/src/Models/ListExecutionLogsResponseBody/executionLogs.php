<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponseBody;

use AlibabaCloud\Tea\Model;

class executionLogs extends Model
{
    /**
     * @description The log type.
     *
     * @example System
     *
     * @var string
     */
    public $logType;

    /**
     * @description The details of the task execution.
     *
     * @example The task CheckDiskCategory completed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The task execution ID.
     *
     * @example exec-1234567zxcvb.t0010
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The timestamp when the task was run.
     *
     * @example 2019-05-24T:02:29:07Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'logType'         => 'LogType',
        'message'         => 'Message',
        'taskExecutionId' => 'TaskExecutionId',
        'timestamp'       => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
