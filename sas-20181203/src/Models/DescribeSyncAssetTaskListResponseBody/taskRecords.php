<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody;

use AlibabaCloud\Tea\Model;

class taskRecords extends Model
{
    /**
     * @description The number of assets that are detected by the task.
     *
     * @example 100
     *
     * @var int
     */
    public $assetCount;

    /**
     * @description The CIDR blocks that are used for scanning. Multiple CIDR blocks are separated by commas (,).
     *
     * @example 1.1.1.1/24,1.1.1.1/24
     *
     * @var string
     */
    public $ipSegments;

    /**
     * @description The progress of the task, in percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $processRate;

    /**
     * @description The ID of the root task.
     *
     * @example 73c392f9c505129a257472a3f911d65d
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The timestamp when the task ended.
     *
     * @example 1653965680000
     *
     * @var int
     */
    public $taskEndTime;

    /**
     * @description The name of the task.
     *
     * @example IDC_PROBE_SCAN-1.1.1..124-lse_ubuntu_test1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The timestamp when the task started. Unit: milliseconds.
     *
     * @example 1633746651715
     *
     * @var int
     */
    public $taskStartTime;

    /**
     * @description The status of the IDC scan task. Valid Values:
     *
     *   **INIT**: The task is not started.
     *   **START**: The task is started.
     *   **MESSAGE_SEND**: The command is sent.
     *   **SUCCESS**: The task is complete.
     *   **FAIL**: The task failed.
     *   **TIMEOUT**: The task timed out.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The type of the task. The value is fixed as **IDC_PROBE_SCAN**, which indicates an IDC scan task.
     *
     * @example IDC_PROBE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'assetCount' => 'AssetCount',
        'ipSegments' => 'IpSegments',
        'processRate' => 'ProcessRate',
        'rootTaskId' => 'RootTaskId',
        'taskEndTime' => 'TaskEndTime',
        'taskName' => 'TaskName',
        'taskStartTime' => 'TaskStartTime',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }
        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }
        if (null !== $this->processRate) {
            $res['ProcessRate'] = $this->processRate;
        }
        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }
        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }
        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }
        if (isset($map['ProcessRate'])) {
            $model->processRate = $map['ProcessRate'];
        }
        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }
        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
