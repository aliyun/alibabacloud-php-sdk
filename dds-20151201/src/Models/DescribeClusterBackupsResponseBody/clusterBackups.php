<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups\backups;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups\extraInfo;
use AlibabaCloud\Tea\Model;

class clusterBackups extends Model
{
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
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $isAvail;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'backups'                => 'Backups',
        'clusterBackupEndTime'   => 'ClusterBackupEndTime',
        'clusterBackupId'        => 'ClusterBackupId',
        'clusterBackupMode'      => 'ClusterBackupMode',
        'clusterBackupSize'      => 'ClusterBackupSize',
        'clusterBackupStartTime' => 'ClusterBackupStartTime',
        'clusterBackupStatus'    => 'ClusterBackupStatus',
        'extraInfo'              => 'ExtraInfo',
        'isAvail'                => 'IsAvail',
        'progress'               => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backups) {
            $res['Backups'] = [];
            if (null !== $this->backups && \is_array($this->backups)) {
                $n = 0;
                foreach ($this->backups as $item) {
                    $res['Backups'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterBackups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backups'])) {
            if (!empty($map['Backups'])) {
                $model->backups = [];
                $n              = 0;
                foreach ($map['Backups'] as $item) {
                    $model->backups[$n++] = null !== $item ? backups::fromMap($item) : $item;
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
