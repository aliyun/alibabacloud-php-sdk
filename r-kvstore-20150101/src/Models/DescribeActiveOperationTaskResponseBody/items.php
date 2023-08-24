<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2018-07-15 23:59:59
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description Queries the information about operations and maintenance (O&M) tasks for an ApsaraDB for Redis instance.
     *
     * @example redis
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The time when the O\&M task was modified. The time in UTC is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format.
     *
     * @example 2018-07-19 23:59:59
     *
     * @var string
     */
    public $deadline;

    /**
     * @example 114111
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the request.
     *
     * @example r-bp1lgal1sdvxrz****
     *
     * @var string
     */
    public $insName;

    /**
     * @description The maximum number of entries that were returned per page.
     *
     * @example 2018-07-19 14:00:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The type of the task. Valid values:
     *
     *   **rds_apsaradb_ha**: switchover between a master node and a replica node.
     *   **rds_apsaradb_transfer**: instance migration task.
     *   **rds_apsaradb_upgrade**: minor version upgrade.
     *   **all**: all task types.
     *
     * @example 14:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @example cn-hanghzou
     *
     * @var string
     */
    public $region;

    /**
     * @description The page number of the returned page.
     *
     * @example 2018-07-19 10:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The required preparation period between the task start time and the switchover time. The time is displayed in the *HH:mm:ss* format.
     *
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @example 2018-07-19 14:00:00
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The number of entries to return on each page. Specify a value greater than **10**. Default value: **30**.
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
