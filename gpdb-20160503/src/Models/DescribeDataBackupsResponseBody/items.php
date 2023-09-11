<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The UTC time when the backup ended. The time is in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC.
     *
     * @example 2021-12-22T12:01:43Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The local time when the backup ended. The time is in the yyyy-MM-dd HH:mm:ss format. The time is your local time.
     *
     * @example 2021-12-22 20:00:25
     *
     * @var string
     */
    public $backupEndTimeLocal;

    /**
     * @description The method that is used to generate the backup set. Valid values:
     *
     *   **Logical**: logical backup
     *   **Physical**: physical backup
     *   **Snapshot**: snapshot backup
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode.
     *
     * Valid values for full backup:
     *
     *   Automated: automatic backup
     *   Manual: manual backup
     *
     * Valid values for point-in-time backup:
     *
     *   Automated: point-in-time backup after full backup
     *   Manual: manual point-in-time backup
     *   Period: point-in-time backup that is triggered by a backup policy
     *
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The ID of the backup set.
     *
     * @example 1111111111
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The size of the backup file. Unit: bytes.
     *
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The UTC time when the backup started. The time is in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC.
     *
     * @example 2021-12-22T12:00:25Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The local time when the backup started. The time is in the yyyy-MM-dd HH:mm:ss format. The time is your local time.
     *
     * @example 2011-05-30 03:29:00
     *
     * @var string
     */
    public $backupStartTimeLocal;

    /**
     * @description The status of the backup set. Valid values:
     *
     *   Success
     *   Failure
     *
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The name of a point-in-time backup set or the full backup set.
     *
     * @example adbpgbackup_555*****_20211222200019
     *
     * @var string
     */
    public $baksetName;

    /**
     * @description *   For full backup, this parameter indicates the point in time at which the data in the data backup file is consistent.
     *   For point-in-time backup, this parameter indicates that the returned point in time is a timestamp.
     *
     * @example 1576506856
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @description The ID of the instance.
     *
     * @example gp-bp**************-master
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the backup. Valid values:
     *
     *   DATA: full backup
     *   RESTOREPOI: point-in-time backup
     *
     * @example DATA
     *
     * @var string
     */
    public $dataType;
    protected $_name = [
        'backupEndTime'        => 'BackupEndTime',
        'backupEndTimeLocal'   => 'BackupEndTimeLocal',
        'backupMethod'         => 'BackupMethod',
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
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
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
