<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The OTA version.
     *
     * @example 0.0.1-R-20220708.110604
     *
     * @var string
     */
    public $otaVersion;

    /**
     * @description The task status.
     *
     * Valid values:
     *
     *   FAILED
     *   RUNNING
     *   TERMINATED
     *   PART_FINISHED
     *   STANDBY
     *   FINISHED
     *
     * @example RUNNING
     *
     * @var string
     */
    public $taskDisplayStatus;

    /**
     * @description The task ID.
     *
     * @example ota-be7jzm29wrrz5****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The start time of the OTA update task. The time follows the ISO 8601 standard.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2022-08-04T14:36:00+08:00
     *
     * @var string
     */
    public $taskStartTime;
    protected $_name = [
        'otaVersion'        => 'OtaVersion',
        'taskDisplayStatus' => 'TaskDisplayStatus',
        'taskId'            => 'TaskId',
        'taskStartTime'     => 'TaskStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->otaVersion) {
            $res['OtaVersion'] = $this->otaVersion;
        }
        if (null !== $this->taskDisplayStatus) {
            $res['TaskDisplayStatus'] = $this->taskDisplayStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OtaVersion'])) {
            $model->otaVersion = $map['OtaVersion'];
        }
        if (isset($map['TaskDisplayStatus'])) {
            $model->taskDisplayStatus = $map['TaskDisplayStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        return $model;
    }
}
