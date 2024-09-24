<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolRequest;

use AlibabaCloud\Tea\Model;

class rollingPolicy extends Model
{
    /**
     * @description The update interval between batches takes effect only when the pause policy is set to NotPause. Unit: minutes. Valid values: 5 to 120.
     *
     * @example 5 minutes
     *
     * @var int
     */
    public $batchInterval;

    /**
     * @description The maximum number of unavailable nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $maxParallelism;

    /**
     * @description The policy that is used to pause the update. Valid values:
     *
     *   FirstBatch: pauses the update after the first batch is completed.
     *   EveryBatch: pauses after each batch is completed.
     *   NotPause: does not pause.
     *
     * @example NotPause
     *
     * @var string
     */
    public $pausePolicy;
    protected $_name = [
        'batchInterval'  => 'batch_interval',
        'maxParallelism' => 'max_parallelism',
        'pausePolicy'    => 'pause_policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchInterval) {
            $res['batch_interval'] = $this->batchInterval;
        }
        if (null !== $this->maxParallelism) {
            $res['max_parallelism'] = $this->maxParallelism;
        }
        if (null !== $this->pausePolicy) {
            $res['pause_policy'] = $this->pausePolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rollingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batch_interval'])) {
            $model->batchInterval = $map['batch_interval'];
        }
        if (isset($map['max_parallelism'])) {
            $model->maxParallelism = $map['max_parallelism'];
        }
        if (isset($map['pause_policy'])) {
            $model->pausePolicy = $map['pause_policy'];
        }

        return $model;
    }
}
