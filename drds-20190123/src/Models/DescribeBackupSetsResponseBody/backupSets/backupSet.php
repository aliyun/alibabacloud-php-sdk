<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet\backupDbs;

class backupSet extends Model
{
    /**
     * @var string
     */
    public $backupConsitentTime;

    /**
     * @var backupDbs
     */
    public $backupDbs;

    /**
     * @var int
     */
    public $backupEndTime;

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
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupTotalSize;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var bool
     */
    public $enableRecovery;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'backupConsitentTime' => 'BackupConsitentTime',
        'backupDbs' => 'BackupDbs',
        'backupEndTime' => 'BackupEndTime',
        'backupLevel' => 'BackupLevel',
        'backupMode' => 'BackupMode',
        'backupStartTime' => 'BackupStartTime',
        'backupTotalSize' => 'BackupTotalSize',
        'backupType' => 'BackupType',
        'enableRecovery' => 'EnableRecovery',
        'id' => 'Id',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->backupDbs) {
            $this->backupDbs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupConsitentTime) {
            $res['BackupConsitentTime'] = $this->backupConsitentTime;
        }

        if (null !== $this->backupDbs) {
            $res['BackupDbs'] = null !== $this->backupDbs ? $this->backupDbs->toArray($noStream) : $this->backupDbs;
        }

        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }

        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }

        if (null !== $this->backupTotalSize) {
            $res['BackupTotalSize'] = $this->backupTotalSize;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->enableRecovery) {
            $res['EnableRecovery'] = $this->enableRecovery;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BackupConsitentTime'])) {
            $model->backupConsitentTime = $map['BackupConsitentTime'];
        }

        if (isset($map['BackupDbs'])) {
            $model->backupDbs = backupDbs::fromMap($map['BackupDbs']);
        }

        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }

        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }

        if (isset($map['BackupTotalSize'])) {
            $model->backupTotalSize = $map['BackupTotalSize'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['EnableRecovery'])) {
            $model->enableRecovery = $map['EnableRecovery'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
