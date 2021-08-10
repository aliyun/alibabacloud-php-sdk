<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var int
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupEndTimeLocal;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $baksetName;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupStartTimeLocal;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'dataType'             => 'DataType',
        'consistentTime'       => 'ConsistentTime',
        'backupStatus'         => 'BackupStatus',
        'backupStartTime'      => 'BackupStartTime',
        'backupEndTime'        => 'BackupEndTime',
        'backupEndTimeLocal'   => 'BackupEndTimeLocal',
        'backupSetId'          => 'BackupSetId',
        'baksetName'           => 'BaksetName',
        'backupSize'           => 'BackupSize',
        'backupMode'           => 'BackupMode',
        'backupStartTimeLocal' => 'BackupStartTimeLocal',
        'DBInstanceId'         => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupEndTimeLocal) {
            $res['BackupEndTimeLocal'] = $this->backupEndTimeLocal;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->baksetName) {
            $res['BaksetName'] = $this->baksetName;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupStartTimeLocal) {
            $res['BackupStartTimeLocal'] = $this->backupStartTimeLocal;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupEndTimeLocal'])) {
            $model->backupEndTimeLocal = $map['BackupEndTimeLocal'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BaksetName'])) {
            $model->baksetName = $map['BaksetName'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupStartTimeLocal'])) {
            $model->backupStartTimeLocal = $map['BackupStartTimeLocal'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
