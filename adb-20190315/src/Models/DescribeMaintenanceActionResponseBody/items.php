<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the O\&M event was created. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-06-30T02:44:27Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the cluster that is involved in the O\&M event.
     *
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The database engine.
     *
     * @example analyticdb
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     * @example 3.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The deadline before which the event can be executed. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-07-04T15:59:59Z
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The ID of the O\&M event.
     *
     * @example 11111
     *
     * @var int
     */
    public $id;

    /**
     * @description The point in time at which the switchover time of the O\&M event was modified. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-07-03T06:33:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The preparation time that is required before the pending O\&M event can be switched. The time is in the `HH:mm:ss` format.
     *
     * @example 02:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @description The ID of the region where the O\&M event occurs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The execution result of the O\&M event.
     *
     * > This parameter is returned only when the value of `Status` is **FAILED** or **CANCEL**.
     * @example autoCancel
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The time when the task was executed in the backend. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-07-03T04:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the event.
     *
     *   If you set `IsHistory` to **0**, the state of the pending O\&M event is returned. Valid values:
     *
     *   **WAITING_MODIFY**: The start time of the O\&M event is waiting to be set.
     *   **WAITING**: The O\&M event is waiting to be processed.
     *   **PROCESSING**: The O\&M event is being processed. The switchover time of an event in this state cannot be changed.
     *
     *   If you set `IsHistory` to **1**, the state of the historical O\&M event is returned. Valid values:
     *
     *   **SUCCESS**: The event ended and the execution succeeded.
     *   **FAILED**: The event ended but the execution failed.
     *   **CANCEL**: The event was canceled.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the pending O\&M event is switched. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-07-03T06:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The type of the O\&M event.
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createdTime'     => 'CreatedTime',
        'DBClusterId'     => 'DBClusterId',
        'DBType'          => 'DBType',
        'DBVersion'       => 'DBVersion',
        'deadline'        => 'Deadline',
        'id'              => 'Id',
        'modifiedTime'    => 'ModifiedTime',
        'prepareInterval' => 'PrepareInterval',
        'region'          => 'Region',
        'resultInfo'      => 'ResultInfo',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'switchTime'      => 'SwitchTime',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->prepareInterval) {
            $res['PrepareInterval'] = $this->prepareInterval;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PrepareInterval'])) {
            $model->prepareInterval = $map['PrepareInterval'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
