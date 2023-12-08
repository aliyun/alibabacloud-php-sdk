<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @example 2022-06-02T16:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 32732****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example Snapshot
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @example 2022-06-01T16:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupId'        => 'BackupId',
        'backupMethod'    => 'BackupMethod',
        'backupSize'      => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupType'      => 'BackupType',
        'DBClusterId'     => 'DBClusterId',
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
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
