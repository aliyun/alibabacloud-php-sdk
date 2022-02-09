<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupSetSize;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupsLevel;

    /**
     * @var string
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $isAvail;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupId'        => 'BackupId',
        'backupMethod'    => 'BackupMethod',
        'backupMode'      => 'BackupMode',
        'backupSetSize'   => 'BackupSetSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus'    => 'BackupStatus',
        'backupType'      => 'BackupType',
        'backupsLevel'    => 'BackupsLevel',
        'consistentTime'  => 'ConsistentTime',
        'DBClusterId'     => 'DBClusterId',
        'isAvail'         => 'IsAvail',
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
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupSetSize) {
            $res['BackupSetSize'] = $this->backupSetSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupsLevel) {
            $res['BackupsLevel'] = $this->backupsLevel;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupSetSize'])) {
            $model->backupSetSize = $map['BackupSetSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupsLevel'])) {
            $model->backupsLevel = $map['BackupsLevel'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        return $model;
    }
}
