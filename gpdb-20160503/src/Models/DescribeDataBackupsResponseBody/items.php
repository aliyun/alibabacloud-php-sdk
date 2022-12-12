<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2011-06-01T17:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 2011-05-30 03:29:00
     *
     * @var string
     */
    public $backupEndTimeLocal;

    /**
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example 327329803
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @example 2011-06-01T17:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example 2011-05-30 03:29:00
     *
     * @var string
     */
    public $backupStartTimeLocal;

    /**
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example restorepoint_xxx
     *
     * @var string
     */
    public $baksetName;

    /**
     * @example 1576506856
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @example gp-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example DATA
     *
     * @var string
     */
    public $dataType;
    protected $_name = [
        'backupEndTime'        => 'BackupEndTime',
        'backupEndTimeLocal'   => 'BackupEndTimeLocal',
        'backupMode'           => 'BackupMode',
        'backupSetId'          => 'BackupSetId',
        'backupSize'           => 'BackupSize',
        'backupStartTime'      => 'BackupStartTime',
        'backupStartTimeLocal' => 'BackupStartTimeLocal',
        'backupStatus'         => 'BackupStatus',
        'baksetName'           => 'BaksetName',
        'consistentTime'       => 'ConsistentTime',
        'DBInstanceId'         => 'DBInstanceId',
        'dataType'             => 'DataType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupEndTimeLocal) {
            $res['BackupEndTimeLocal'] = $this->backupEndTimeLocal;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStartTimeLocal) {
            $res['BackupStartTimeLocal'] = $this->backupStartTimeLocal;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->baksetName) {
            $res['BaksetName'] = $this->baksetName;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
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
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupEndTimeLocal'])) {
            $model->backupEndTimeLocal = $map['BackupEndTimeLocal'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStartTimeLocal'])) {
            $model->backupStartTimeLocal = $map['BackupStartTimeLocal'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BaksetName'])) {
            $model->baksetName = $map['BaksetName'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        return $model;
    }
}
