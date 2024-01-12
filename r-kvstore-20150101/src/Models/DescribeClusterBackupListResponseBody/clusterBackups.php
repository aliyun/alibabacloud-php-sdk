<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups;
use AlibabaCloud\Tea\Model;

class clusterBackups extends Model
{
    /**
     * @var backups[]
     */
    public $backups;

    /**
     * @example 2024-01-10T17:21:55Z
     *
     * @var string
     */
    public $clusterBackupEndTime;

    /**
     * @example cb-zmdqj2m3xyxjtdt0
     *
     * @var string
     */
    public $clusterBackupId;

    /**
     * @example Automated
     *
     * @var string
     */
    public $clusterBackupMode;

    /**
     * @example 2048
     *
     * @var string
     */
    public $clusterBackupSize;

    /**
     * @example 2024-01-10T17:21:25Z
     *
     * @var string
     */
    public $clusterBackupStartTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $clusterBackupStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $isAvail;

    /**
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @example 1024
     *
     * @var int
     */
    public $shardClassMemory;
    protected $_name = [
        'backups'                => 'Backups',
        'clusterBackupEndTime'   => 'ClusterBackupEndTime',
        'clusterBackupId'        => 'ClusterBackupId',
        'clusterBackupMode'      => 'ClusterBackupMode',
        'clusterBackupSize'      => 'ClusterBackupSize',
        'clusterBackupStartTime' => 'ClusterBackupStartTime',
        'clusterBackupStatus'    => 'ClusterBackupStatus',
        'isAvail'                => 'IsAvail',
        'progress'               => 'Progress',
        'shardClassMemory'       => 'ShardClassMemory',
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
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->shardClassMemory) {
            $res['ShardClassMemory'] = $this->shardClassMemory;
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
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ShardClassMemory'])) {
            $model->shardClassMemory = $map['ShardClassMemory'];
        }

        return $model;
    }
}
