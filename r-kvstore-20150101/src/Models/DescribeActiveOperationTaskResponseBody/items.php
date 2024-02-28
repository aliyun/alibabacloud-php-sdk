<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the O\&M task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-15 23:59:59
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The database type of the instance. The return value is **Redis**.
     *
     * @example redis
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The deadline before which the time to preform the O&M task can be modified. The time in UTC is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format.
     *
     * @example 2018-07-19 23:59:59
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The ID of the O&M task.
     *
     * @example 114111
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1lgal1sdvxrz****
     *
     * @var string
     */
    public $insName;

    /**
     * @description The time when the O\&M task was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19 14:00:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The required preparation period between the task start time and the switchover time. The time is displayed in the *HH:mm:ss* format.
     *
     * @example 14:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hanghzou
     *
     * @var string
     */
    public $region;

    /**
     * @description The time when the O\&M task was preformed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19 10:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the O&M task. Valid values:
     *
     *   **2**: The task is waiting for users to specify a switchover time.
     *   **3**: The task is waiting to be performed.
     *   **4**: The task is being performed. If the task is in this state, the [ModifyActiveOperationTask](~~ModifyActiveOperationTask~~) operation cannot be called to modify the scheduled switchover time.
     *   **5**: The task is performed.
     *   **6**: The task fails.
     *   **7**: The task is canceled.
     *
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the system performs the switchover operation. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19 14:00:00
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The type of the task. Valid values:
     *
     *   **rds_apsaradb_ha**: master-replica switchover
     *   **rds_apsaradb_transfer**: instance migration
     *   **rds_apsaradb_upgrade**: minor version update
     *   **all**: all types
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createdTime'     => 'CreatedTime',
        'dbType'          => 'DbType',
        'deadline'        => 'Deadline',
        'id'              => 'Id',
        'insName'         => 'InsName',
        'modifiedTime'    => 'ModifiedTime',
        'prepareInterval' => 'PrepareInterval',
        'region'          => 'Region',
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
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
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
