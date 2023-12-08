<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2021-11-22T18:28:41Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 117403****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example {"shard_count"：4}
     *
     * @var string
     */
    public $backupSetInfo;

    /**
     * @example 131072
     *
     * @var int
     */
    public $backupSize;

    /**
     * @example 2021-11-22T18:28:22Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example IncrementalBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @example cc-bp1qx68m06981****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2022-07-22T18:28:41Z
     *
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
