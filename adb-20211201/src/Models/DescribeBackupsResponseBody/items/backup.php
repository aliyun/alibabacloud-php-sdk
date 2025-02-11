<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\Dara\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $backupEndTime;
    /**
     * @var string
     */
    public $backupExpiredTime;
    /**
     * @var string
     */
    public $backupId;
    /**
     * @var string
     */
    public $backupMethod;
    /**
     * @var int
     */
    public $backupSize;
    /**
     * @var string
     */
    public $backupStartTime;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'backupEndTime'     => 'BackupEndTime',
        'backupExpiredTime' => 'BackupExpiredTime',
        'backupId'          => 'BackupId',
        'backupMethod'      => 'BackupMethod',
        'backupSize'        => 'BackupSize',
        'backupStartTime'   => 'BackupStartTime',
        'backupType'        => 'BackupType',
        'DBClusterId'       => 'DBClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }

        if (null !== $this->backupExpiredTime) {
            $res['BackupExpiredTime'] = $this->backupExpiredTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }

        if (isset($map['BackupExpiredTime'])) {
            $model->backupExpiredTime = $map['BackupExpiredTime'];
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
