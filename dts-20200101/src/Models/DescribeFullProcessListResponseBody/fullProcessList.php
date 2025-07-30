<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListResponseBody;

use AlibabaCloud\Tea\Model;

class fullProcessList extends Model
{
    /**
     * @description Details
     *
     * @example {}
     *
     * @var string
     */
    public $detail;

    /**
     * @description The abnormal status of the task. Valid values:**notstarted**. -**checking**. -**failed**. -**finished**.
     *
     * @example notstarted
     *
     * @var string
     */
    public $exception;

    /**
     * @description The name of the process.
     *
     * @example universer
     *
     * @var string
     */
    public $processName;

    /**
     * @description The type of the process. Valid values:
     *
     *   **1**: trusted
     *   **2**: suspicious
     *   **3**: malicious
     *
     * @example 1
     *
     * @var string
     */
    public $processType;

    /**
     * @description SQL that is running
     *
     * @example test
     *
     * @var string
     */
    public $runningSQL;

    /**
     * @description The log status.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the task.
     *
     * @example TaskD4E5F6
     *
     * @var string
     */
    public $taskID;

    /**
     * @description The time when the logs were collected. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 1729650129452
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'detail' => 'Detail',
        'exception' => 'Exception',
        'processName' => 'ProcessName',
        'processType' => 'ProcessType',
        'runningSQL' => 'RunningSQL',
        'state' => 'State',
        'taskID' => 'TaskID',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }
        if (null !== $this->runningSQL) {
            $res['RunningSQL'] = $this->runningSQL;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskID) {
            $res['TaskID'] = $this->taskID;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullProcessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }
        if (isset($map['RunningSQL'])) {
            $model->runningSQL = $map['RunningSQL'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskID'])) {
            $model->taskID = $map['TaskID'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
