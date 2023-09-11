<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataBackupsRequest extends Model
{
    /**
     * @description The ID of the backup set. If you specify BackupId, the details of the backup set are returned.
     *
     * > You can call the [DescribeDataBackups](~~210093~~) operation to query the information about all backup sets of an instance, including backup set IDs.
     * @example 327329803
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The backup mode. Valid values:
     *
     *   Automated
     *   Manual
     *
     * If you do not specify this parameter, all backup sets are returned.
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The state of the backup set. Valid values:
     *
     *   Success
     *   Failed
     *
     * If you do not specify this parameter, all backup sets are returned.
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The instance ID.
     *
     * > You can call the [DescribeDBInstances](~~86911~~) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The backup type. Valid values:
     *
     *   **DATA**: full backup.
     *   **RESTOREPOI**: point-in-time recovery backup.
     *
     * If you do not specify this parameter, the backup sets of full backup are returned.
     * @example DATA
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * @example 2011-06-01T16:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. Pages start from page 1. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   30
     *   50
     *   100
     *
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * @example 2011-06-01T15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'backupId'     => 'BackupId',
        'backupMode'   => 'BackupMode',
        'backupStatus' => 'BackupStatus',
        'DBInstanceId' => 'DBInstanceId',
        'dataType'     => 'DataType',
        'endTime'      => 'EndTime',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataBackupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
