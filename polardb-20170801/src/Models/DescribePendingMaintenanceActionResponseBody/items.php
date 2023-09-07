<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the task was created. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-09T22:00:42Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     *   Valid values for the MySQL database engine:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     *   Valid values for the PostgreSQL database engine:
     *
     *   **11**
     *   **14**
     *
     *   Valid value for the Oracle database engine: **11**
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The deadline before which the task can be executed. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-11T15:59:59Z
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The ID of the task.
     *
     * @example 111111
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the parameter was modified. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-09T22:00:42Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The preparation time that is required before the pending event is switched. The time follows the `HH:mm:ss` format.
     *
     * @example 04:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @description The region ID of the pending event.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The execution result of the task. Valid values:
     *
     *   **manualCancel**: The task is manually canceled.
     *   **paramCheckNotPass**: The task fails to pass the parameter check.
     *
     * > This parameter is returned only when the value of the `Status` parameter is **6** or **7**. The value 6 indicates that the task is completed but fails to be executed. The value 7 indicates that the task is canceled.
     * @example manualCancel
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The time when the task was executed in the background. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-09T18:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the pending task.
     *
     *   If you set the `IsHistory` parameter to **0**, the status of the pending task is returned. Valid values:
     *
     *   **2**: The start time of the task is to be specified.
     *   **3**: The task is pending.
     *   **4**: The task is running. In this case, you cannot modify the execution time.
     *
     *   If you set the `IsHistory` parameter to **1**, the details of the historical tasks are returned. Valid values:
     *
     *   **5**: The task is completed and executed.
     *   **6**: The task is completed but fails to be executed.
     *   **7**: The task is canceled.
     *
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the pending event was switched. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-09T22:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The type of the pending event.
     *
     * @example DatabaseSoftwareUpgrading
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
