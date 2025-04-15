<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data\list_\sourceProgress;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data\list_\targetProgress;

class list_ extends Model
{
    /**
     * @var int
     */
    public $checkpointId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $lastSyncTime;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var sourceProgress
     */
    public $sourceProgress;

    /**
     * @var targetProgress
     */
    public $targetProgress;
    protected $_name = [
        'checkpointId' => 'checkpointId',
        'itemId' => 'itemId',
        'lastSyncTime' => 'lastSyncTime',
        'planId' => 'planId',
        'sourceProgress' => 'sourceProgress',
        'targetProgress' => 'targetProgress',
    ];

    public function validate()
    {
        if (null !== $this->sourceProgress) {
            $this->sourceProgress->validate();
        }
        if (null !== $this->targetProgress) {
            $this->targetProgress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpointId) {
            $res['checkpointId'] = $this->checkpointId;
        }

        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }

        if (null !== $this->lastSyncTime) {
            $res['lastSyncTime'] = $this->lastSyncTime;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->sourceProgress) {
            $res['sourceProgress'] = null !== $this->sourceProgress ? $this->sourceProgress->toArray($noStream) : $this->sourceProgress;
        }

        if (null !== $this->targetProgress) {
            $res['targetProgress'] = null !== $this->targetProgress ? $this->targetProgress->toArray($noStream) : $this->targetProgress;
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
        if (isset($map['checkpointId'])) {
            $model->checkpointId = $map['checkpointId'];
        }

        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }

        if (isset($map['lastSyncTime'])) {
            $model->lastSyncTime = $map['lastSyncTime'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['sourceProgress'])) {
            $model->sourceProgress = sourceProgress::fromMap($map['sourceProgress']);
        }

        if (isset($map['targetProgress'])) {
            $model->targetProgress = targetProgress::fromMap($map['targetProgress']);
        }

        return $model;
    }
}
