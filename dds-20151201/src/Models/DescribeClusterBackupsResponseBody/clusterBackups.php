<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups\backups;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups\extraInfo;

class clusterBackups extends Model
{
    /**
     * @var string
     */
    public $attachLogStatus;

    /**
     * @var string
     */
    public $backupExpireTime;

    /**
     * @var backups[]
     */
    public $backups;

    /**
     * @var string
     */
    public $clusterBackupEndTime;

    /**
     * @var string
     */
    public $clusterBackupId;

    /**
     * @var string
     */
    public $clusterBackupMode;

    /**
     * @var string
     */
    public $clusterBackupSize;

    /**
     * @var string
     */
    public $clusterBackupStartTime;

    /**
     * @var string
     */
    public $clusterBackupStatus;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var int
     */
    public $isAvail;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'attachLogStatus' => 'AttachLogStatus',
        'backupExpireTime' => 'BackupExpireTime',
        'backups' => 'Backups',
        'clusterBackupEndTime' => 'ClusterBackupEndTime',
        'clusterBackupId' => 'ClusterBackupId',
        'clusterBackupMode' => 'ClusterBackupMode',
        'clusterBackupSize' => 'ClusterBackupSize',
        'clusterBackupStartTime' => 'ClusterBackupStartTime',
        'clusterBackupStatus' => 'ClusterBackupStatus',
        'engineVersion' => 'EngineVersion',
        'extraInfo' => 'ExtraInfo',
        'isAvail' => 'IsAvail',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        if (\is_array($this->backups)) {
            Model::validateArray($this->backups);
        }
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachLogStatus) {
            $res['AttachLogStatus'] = $this->attachLogStatus;
        }

        if (null !== $this->backupExpireTime) {
            $res['BackupExpireTime'] = $this->backupExpireTime;
        }

        if (null !== $this->backups) {
            if (\is_array($this->backups)) {
                $res['Backups'] = [];
                $n1 = 0;
                foreach ($this->backups as $item1) {
                    $res['Backups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterBackupEndTime) {
            $res['ClusterBackupEndTime'] = $this->clusterBackupEndTime;
        }

        if (null !== $this->clusterBackupId) {
            $res['ClusterBackupId'] = $this->clusterBackupId;
        }

        if (null !== $this->clusterBackupMode) {
            $res['ClusterBackupMode'] = $this->clusterBackupMode;
        }

        if (null !== $this->clusterBackupSize) {
            $res['ClusterBackupSize'] = $this->clusterBackupSize;
        }

        if (null !== $this->clusterBackupStartTime) {
            $res['ClusterBackupStartTime'] = $this->clusterBackupStartTime;
        }

        if (null !== $this->clusterBackupStatus) {
            $res['ClusterBackupStatus'] = $this->clusterBackupStatus;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
        }

        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['AttachLogStatus'])) {
            $model->attachLogStatus = $map['AttachLogStatus'];
        }

        if (isset($map['BackupExpireTime'])) {
            $model->backupExpireTime = $map['BackupExpireTime'];
        }

        if (isset($map['Backups'])) {
            if (!empty($map['Backups'])) {
                $model->backups = [];
                $n1 = 0;
                foreach ($map['Backups'] as $item1) {
                    $model->backups[$n1] = backups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterBackupEndTime'])) {
            $model->clusterBackupEndTime = $map['ClusterBackupEndTime'];
        }

        if (isset($map['ClusterBackupId'])) {
            $model->clusterBackupId = $map['ClusterBackupId'];
        }

        if (isset($map['ClusterBackupMode'])) {
            $model->clusterBackupMode = $map['ClusterBackupMode'];
        }

        if (isset($map['ClusterBackupSize'])) {
            $model->clusterBackupSize = $map['ClusterBackupSize'];
        }

        if (isset($map['ClusterBackupStartTime'])) {
            $model->clusterBackupStartTime = $map['ClusterBackupStartTime'];
        }

        if (isset($map['ClusterBackupStatus'])) {
            $model->clusterBackupStatus = $map['ClusterBackupStatus'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }

        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
