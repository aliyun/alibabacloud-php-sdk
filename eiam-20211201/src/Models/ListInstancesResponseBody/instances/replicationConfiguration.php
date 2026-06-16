<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class replicationConfiguration extends Model
{
    /**
     * @var string
     */
    public $backupInstanceId;

    /**
     * @var string
     */
    public $backupInstanceRegionId;

    /**
     * @var string
     */
    public $primaryInstanceId;

    /**
     * @var string
     */
    public $primaryInstanceRegionId;

    /**
     * @var int
     */
    public $replicationCreateTime;
    protected $_name = [
        'backupInstanceId' => 'BackupInstanceId',
        'backupInstanceRegionId' => 'BackupInstanceRegionId',
        'primaryInstanceId' => 'PrimaryInstanceId',
        'primaryInstanceRegionId' => 'PrimaryInstanceRegionId',
        'replicationCreateTime' => 'ReplicationCreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupInstanceId) {
            $res['BackupInstanceId'] = $this->backupInstanceId;
        }

        if (null !== $this->backupInstanceRegionId) {
            $res['BackupInstanceRegionId'] = $this->backupInstanceRegionId;
        }

        if (null !== $this->primaryInstanceId) {
            $res['PrimaryInstanceId'] = $this->primaryInstanceId;
        }

        if (null !== $this->primaryInstanceRegionId) {
            $res['PrimaryInstanceRegionId'] = $this->primaryInstanceRegionId;
        }

        if (null !== $this->replicationCreateTime) {
            $res['ReplicationCreateTime'] = $this->replicationCreateTime;
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
        if (isset($map['BackupInstanceId'])) {
            $model->backupInstanceId = $map['BackupInstanceId'];
        }

        if (isset($map['BackupInstanceRegionId'])) {
            $model->backupInstanceRegionId = $map['BackupInstanceRegionId'];
        }

        if (isset($map['PrimaryInstanceId'])) {
            $model->primaryInstanceId = $map['PrimaryInstanceId'];
        }

        if (isset($map['PrimaryInstanceRegionId'])) {
            $model->primaryInstanceRegionId = $map['PrimaryInstanceRegionId'];
        }

        if (isset($map['ReplicationCreateTime'])) {
            $model->replicationCreateTime = $map['ReplicationCreateTime'];
        }

        return $model;
    }
}
