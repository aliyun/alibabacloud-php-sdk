<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MigrationJob\sourceCluster;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MigrationJob\statusResult;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MigrationJob\targetCluster;
use AlibabaCloud\Tea\Model;

class MigrationJob extends Model
{
    /**
     * @var string
     */
    public $currentState;

    /**
     * @var bool
     */
    public $disableSourceClusterAuth;

    /**
     * @var bool
     */
    public $disableTargetClusterAuth;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $migrationJobId;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var sourceCluster
     */
    public $sourceCluster;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var statusResult[]
     */
    public $statusResult;

    /**
     * @var targetCluster
     */
    public $targetCluster;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'currentState'             => 'currentState',
        'disableSourceClusterAuth' => 'disableSourceClusterAuth',
        'disableTargetClusterAuth' => 'disableTargetClusterAuth',
        'endTime'                  => 'endTime',
        'migrationJobId'           => 'migrationJobId',
        'phase'                    => 'phase',
        'sourceCluster'            => 'sourceCluster',
        'startTime'                => 'startTime',
        'statusResult'             => 'statusResult',
        'targetCluster'            => 'targetCluster',
        'updateTime'               => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentState) {
            $res['currentState'] = $this->currentState;
        }
        if (null !== $this->disableSourceClusterAuth) {
            $res['disableSourceClusterAuth'] = $this->disableSourceClusterAuth;
        }
        if (null !== $this->disableTargetClusterAuth) {
            $res['disableTargetClusterAuth'] = $this->disableTargetClusterAuth;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->migrationJobId) {
            $res['migrationJobId'] = $this->migrationJobId;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->sourceCluster) {
            $res['sourceCluster'] = null !== $this->sourceCluster ? $this->sourceCluster->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->statusResult) {
            $res['statusResult'] = [];
            if (null !== $this->statusResult && \is_array($this->statusResult)) {
                $n = 0;
                foreach ($this->statusResult as $item) {
                    $res['statusResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetCluster) {
            $res['targetCluster'] = null !== $this->targetCluster ? $this->targetCluster->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrationJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentState'])) {
            $model->currentState = $map['currentState'];
        }
        if (isset($map['disableSourceClusterAuth'])) {
            $model->disableSourceClusterAuth = $map['disableSourceClusterAuth'];
        }
        if (isset($map['disableTargetClusterAuth'])) {
            $model->disableTargetClusterAuth = $map['disableTargetClusterAuth'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['migrationJobId'])) {
            $model->migrationJobId = $map['migrationJobId'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['sourceCluster'])) {
            $model->sourceCluster = sourceCluster::fromMap($map['sourceCluster']);
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['statusResult'])) {
            if (!empty($map['statusResult'])) {
                $model->statusResult = [];
                $n                   = 0;
                foreach ($map['statusResult'] as $item) {
                    $model->statusResult[$n++] = null !== $item ? statusResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['targetCluster'])) {
            $model->targetCluster = targetCluster::fromMap($map['targetCluster']);
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
