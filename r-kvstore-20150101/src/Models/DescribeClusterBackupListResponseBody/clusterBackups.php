<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups;

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
     * @var int
     */
    public $isAvail;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $shardClassMemory;
    protected $_name = [
        'backups' => 'Backups',
        'clusterBackupEndTime' => 'ClusterBackupEndTime',
        'clusterBackupId' => 'ClusterBackupId',
        'clusterBackupMode' => 'ClusterBackupMode',
        'clusterBackupSize' => 'ClusterBackupSize',
        'clusterBackupStartTime' => 'ClusterBackupStartTime',
        'clusterBackupStatus' => 'ClusterBackupStatus',
        'isAvail' => 'IsAvail',
        'progress' => 'Progress',
        'shardClassMemory' => 'ShardClassMemory',
    ];

    public function validate()
    {
        if (\is_array($this->backups)) {
            Model::validateArray($this->backups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backups) {
            if (\is_array($this->backups)) {
                $res['Backups'] = [];
                $n1 = 0;
                foreach ($this->backups as $item1) {
                    $res['Backups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backups'])) {
            if (!empty($map['Backups'])) {
                $model->backups = [];
                $n1 = 0;
                foreach ($map['Backups'] as $item1) {
                    $model->backups[$n1++] = backups::fromMap($item1);
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
