<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
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
    public $backupSetInfo;
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
    public $backupStatus;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $expireDate;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupId'        => 'BackupId',
        'backupMethod'    => 'BackupMethod',
        'backupSetInfo'   => 'BackupSetInfo',
        'backupSize'      => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus'    => 'BackupStatus',
        'backupType'      => 'BackupType',
        'DBClusterId'     => 'DBClusterId',
        'expireDate'      => 'ExpireDate',
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

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupSetInfo) {
            $res['BackupSetInfo'] = $this->backupSetInfo;
        }

        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
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

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
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

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupSetInfo'])) {
            $model->backupSetInfo = $map['BackupSetInfo'];
        }

        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
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

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        return $model;
    }
}
