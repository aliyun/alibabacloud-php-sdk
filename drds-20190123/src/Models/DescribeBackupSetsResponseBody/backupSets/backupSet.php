<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet\backupDbs;
use AlibabaCloud\Tea\Model;

class backupSet extends Model
{
    /**
     * @var bool
     */
    public $enableRecovery;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $backupConsitentTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var int
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupLevel;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var int
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $backupTotalSize;

    /**
     * @var backupDbs
     */
    public $backupDbs;
    protected $_name = [
        'enableRecovery'      => 'EnableRecovery',
        'status'              => 'Status',
        'backupConsitentTime' => 'BackupConsitentTime',
        'backupType'          => 'BackupType',
        'backupStartTime'     => 'BackupStartTime',
        'backupLevel'         => 'BackupLevel',
        'backupMode'          => 'BackupMode',
        'backupEndTime'       => 'BackupEndTime',
        'id'                  => 'Id',
        'backupTotalSize'     => 'BackupTotalSize',
        'backupDbs'           => 'BackupDbs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRecovery) {
            $res['EnableRecovery'] = $this->enableRecovery;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->backupConsitentTime) {
            $res['BackupConsitentTime'] = $this->backupConsitentTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->backupTotalSize) {
            $res['BackupTotalSize'] = $this->backupTotalSize;
        }
        if (null !== $this->backupDbs) {
            $res['BackupDbs'] = null !== $this->backupDbs ? $this->backupDbs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableRecovery'])) {
            $model->enableRecovery = $map['EnableRecovery'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BackupConsitentTime'])) {
            $model->backupConsitentTime = $map['BackupConsitentTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['BackupTotalSize'])) {
            $model->backupTotalSize = $map['BackupTotalSize'];
        }
        if (isset($map['BackupDbs'])) {
            $model->backupDbs = backupDbs::fromMap($map['BackupDbs']);
        }

        return $model;
    }
}
