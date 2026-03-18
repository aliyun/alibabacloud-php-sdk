<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupsRequest extends Model
{
    /**
     * @var string
     */
    public $backupTaskId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statuses;

    /**
     * @var int
     */
    public $timePeriodEndTime;

    /**
     * @var int
     */
    public $timePeriodStartTime;
    protected $_name = [
        'backupTaskId' => 'BackupTaskId',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'statuses' => 'Statuses',
        'timePeriodEndTime' => 'TimePeriodEndTime',
        'timePeriodStartTime' => 'TimePeriodStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupTaskId) {
            $res['BackupTaskId'] = $this->backupTaskId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        if (null !== $this->timePeriodEndTime) {
            $res['TimePeriodEndTime'] = $this->timePeriodEndTime;
        }

        if (null !== $this->timePeriodStartTime) {
            $res['TimePeriodStartTime'] = $this->timePeriodStartTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupTaskId'])) {
            $model->backupTaskId = $map['BackupTaskId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Statuses'])) {
            $model->statuses = $map['Statuses'];
        }

        if (isset($map['TimePeriodEndTime'])) {
            $model->timePeriodEndTime = $map['TimePeriodEndTime'];
        }

        if (isset($map['TimePeriodStartTime'])) {
            $model->timePeriodStartTime = $map['TimePeriodStartTime'];
        }

        return $model;
    }
}
