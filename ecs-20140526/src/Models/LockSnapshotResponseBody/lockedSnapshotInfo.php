<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\LockSnapshotResponseBody;

use AlibabaCloud\Dara\Model;

class lockedSnapshotInfo extends Model
{
    /**
     * @var int
     */
    public $coolOffPeriod;

    /**
     * @var string
     */
    public $coolOffPeriodExpiredTime;

    /**
     * @var string
     */
    public $lockCreationTime;

    /**
     * @var int
     */
    public $lockDuration;

    /**
     * @var string
     */
    public $lockDurationStartTime;

    /**
     * @var string
     */
    public $lockExpiredTime;

    /**
     * @var string
     */
    public $lockStatus;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'coolOffPeriod' => 'CoolOffPeriod',
        'coolOffPeriodExpiredTime' => 'CoolOffPeriodExpiredTime',
        'lockCreationTime' => 'LockCreationTime',
        'lockDuration' => 'LockDuration',
        'lockDurationStartTime' => 'LockDurationStartTime',
        'lockExpiredTime' => 'LockExpiredTime',
        'lockStatus' => 'LockStatus',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coolOffPeriod) {
            $res['CoolOffPeriod'] = $this->coolOffPeriod;
        }

        if (null !== $this->coolOffPeriodExpiredTime) {
            $res['CoolOffPeriodExpiredTime'] = $this->coolOffPeriodExpiredTime;
        }

        if (null !== $this->lockCreationTime) {
            $res['LockCreationTime'] = $this->lockCreationTime;
        }

        if (null !== $this->lockDuration) {
            $res['LockDuration'] = $this->lockDuration;
        }

        if (null !== $this->lockDurationStartTime) {
            $res['LockDurationStartTime'] = $this->lockDurationStartTime;
        }

        if (null !== $this->lockExpiredTime) {
            $res['LockExpiredTime'] = $this->lockExpiredTime;
        }

        if (null !== $this->lockStatus) {
            $res['LockStatus'] = $this->lockStatus;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
        if (isset($map['CoolOffPeriod'])) {
            $model->coolOffPeriod = $map['CoolOffPeriod'];
        }

        if (isset($map['CoolOffPeriodExpiredTime'])) {
            $model->coolOffPeriodExpiredTime = $map['CoolOffPeriodExpiredTime'];
        }

        if (isset($map['LockCreationTime'])) {
            $model->lockCreationTime = $map['LockCreationTime'];
        }

        if (isset($map['LockDuration'])) {
            $model->lockDuration = $map['LockDuration'];
        }

        if (isset($map['LockDurationStartTime'])) {
            $model->lockDurationStartTime = $map['LockDurationStartTime'];
        }

        if (isset($map['LockExpiredTime'])) {
            $model->lockExpiredTime = $map['LockExpiredTime'];
        }

        if (isset($map['LockStatus'])) {
            $model->lockStatus = $map['LockStatus'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
