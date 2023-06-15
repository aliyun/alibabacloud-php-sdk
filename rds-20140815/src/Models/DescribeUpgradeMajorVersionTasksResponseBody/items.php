<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time at which ApsaraDB RDS collects the statistics of the new RDS instance.
     *
     * Valid values:
     *
     *   **After**: ApsaraDB RDS collects the statistics of the new instance after a switchover.
     *   **Before**: ApsaraDB RDS collects the statistics of the new instance before a switchover.
     *
     * @example After
     *
     * @var string
     */
    public $collectStatMode;

    /**
     * @description The details of the task.
     *
     * @example 2021-10-27 15:03:05 --- do upgrade precheck on slave succcess.\n2021-10-27 15:03:11 --- begin to upgrade major version, source instance will locked in readonly mode.\n2021-10-27 15:03:21 --- upgrade master success.\n2021-10-27 15:06:10 --- exchange source and target instance dns success.\n
     *
     * @var string
     */
    public $detail;

    /**
     * @description The time at which the task ended.
     *
     * The value of this parameter is a timestamp that follows the UNIX time format. Unit: milliseconds.
     * @example 1614237779000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The status of the task.
     *
     *   **Success**: The task is successful.
     *   **Failed**: The task failed.
     *   **Running**: The task is in the phase in which data is being migrated to a new instance.
     *
     * @example Success
     *
     * @var string
     */
    public $result;

    /**
     * @description The ID of the original instance.
     *
     * @example pgm-bp1i3kkq7321****
     *
     * @var string
     */
    public $sourceInsName;

    /**
     * @description The major engine version of the original instance.
     *
     * @example 11.0
     *
     * @var string
     */
    public $sourceMajorVersion;

    /**
     * @description The time at which the task started.
     *
     * The value of this parameter is a timestamp that follows the UNIX time format. Unit: milliseconds.
     * @example 1614236007000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time at which your workloads are switched over from the original instance to the new instance.
     *
     * The value of this parameter is a timestamp that follows the UNIX time format. Unit: milliseconds.
     * @example 1614237539000
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The ID of the new instance.
     *
     * @example pgm-bp1c0v6d8092****
     *
     * @var string
     */
    public $targetInsName;

    /**
     * @description The major engine version of the new instance. Valid values:
     *
     *   **10.0**
     *   **11.0**
     *   **12.0**
     *   **13.0**
     *
     * @example 12.0
     *
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @description The ID of the task.
     *
     * @example 342900000
     *
     * @var int
     */
    public $taskId;

    /**
     * @description Indicates whether ApsaraDB RDS migrates data to the new instance and switches your workloads over to the new instance.
     *
     * Valid values:
     *
     *   **clone**: ApsaraDB RDS does not migrate data to the new instance and does not switch your workloads over to the new instance.
     *   **switch**: ApsaraDB RDS migrates data to the new instance and switches your workloads over to the new instance.
     *
     * @example switch
     *
     * @var string
     */
    public $upgradeMode;
    protected $_name = [
        'collectStatMode'    => 'CollectStatMode',
        'detail'             => 'Detail',
        'endTime'            => 'EndTime',
        'result'             => 'Result',
        'sourceInsName'      => 'SourceInsName',
        'sourceMajorVersion' => 'SourceMajorVersion',
        'startTime'          => 'StartTime',
        'switchTime'         => 'SwitchTime',
        'targetInsName'      => 'TargetInsName',
        'targetMajorVersion' => 'TargetMajorVersion',
        'taskId'             => 'TaskId',
        'upgradeMode'        => 'UpgradeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectStatMode) {
            $res['CollectStatMode'] = $this->collectStatMode;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sourceInsName) {
            $res['SourceInsName'] = $this->sourceInsName;
        }
        if (null !== $this->sourceMajorVersion) {
            $res['SourceMajorVersion'] = $this->sourceMajorVersion;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->targetInsName) {
            $res['TargetInsName'] = $this->targetInsName;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectStatMode'])) {
            $model->collectStatMode = $map['CollectStatMode'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SourceInsName'])) {
            $model->sourceInsName = $map['SourceInsName'];
        }
        if (isset($map['SourceMajorVersion'])) {
            $model->sourceMajorVersion = $map['SourceMajorVersion'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TargetInsName'])) {
            $model->targetInsName = $map['TargetInsName'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }

        return $model;
    }
}
