<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponseBody;

use AlibabaCloud\Tea\Model;

class executionLogs extends Model
{
    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskExecutionId;

    /**
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
