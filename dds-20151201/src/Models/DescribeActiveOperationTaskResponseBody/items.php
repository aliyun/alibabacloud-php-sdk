<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-11-06T13:11:08Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The database type of the instance.
     *
     * @example mongodb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The deadline before which the time to preform the task can be modified. The time in UTC is displayed in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2023-03-29T13:59:59Z
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The task ID.
     *
     * @example 50xx
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example dds-bp12721xxxx9b914
     *
     * @var string
     */
    public $insName;

    /**
     * @description The time when the task was modified. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-24T08:18:53Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The required preparation period between the task start time and the switchover time. The time is displayed in the HH:mm:ss format.
     *
     * @example 14:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @description The region of the instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The result information.
     *
     * @example ""
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The time when the task was preformed. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-20T02:40:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the task. Valid values:
     *
     * - 2: The task is waiting for users to specify a switchover time.
     * - 3: The task is waiting to be performed.
     * - 4: The task is being performed. If the task is in this state, the ModifyActiveOperationTask operation cannot be called to modify the scheduled switchover time.
     * - 5: The task is performed.
     * - 6: The task fails.
     * - 7: The task is canceled.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the system performs the switchover operation. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-11-06T14:11:08Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The task parameters.
     *
     * @example ""
     *
     * @var string
     */
    public $taskParams;

    /**
     * @description The type of the task. Valid values:
     *
     * - rds_apsaradb_ha: master-replica switchover
     * - rds_apsaradb_transfer: instance migration
     * - rds_apsaradb_upgrade: minor version update
     * - all: all types
     *
     * @example rds_apsaradb_ha
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'dbType' => 'DbType',
        'deadline' => 'Deadline',
        'id' => 'Id',
        'insName' => 'InsName',
        'modifiedTime' => 'ModifiedTime',
        'prepareInterval' => 'PrepareInterval',
        'region' => 'Region',
        'resultInfo' => 'ResultInfo',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'switchTime' => 'SwitchTime',
        'taskParams' => 'TaskParams',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

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
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
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
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
