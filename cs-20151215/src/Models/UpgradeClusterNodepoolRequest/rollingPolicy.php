<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolRequest;

use AlibabaCloud\Dara\Model;

class rollingPolicy extends Model
{
    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var int
     */
    public $maxFailedNodes;

    /**
     * @var int
     */
    public $maxParallelism;

    /**
     * @var string
     */
    public $pausePolicy;
    protected $_name = [
        'batchInterval' => 'batch_interval',
        'maxFailedNodes' => 'max_failed_nodes',
        'maxParallelism' => 'max_parallelism',
        'pausePolicy' => 'pause_policy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchInterval) {
            $res['batch_interval'] = $this->batchInterval;
        }

        if (null !== $this->maxFailedNodes) {
            $res['max_failed_nodes'] = $this->maxFailedNodes;
        }

        if (null !== $this->maxParallelism) {
            $res['max_parallelism'] = $this->maxParallelism;
        }

        if (null !== $this->pausePolicy) {
            $res['pause_policy'] = $this->pausePolicy;
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
        if (isset($map['batch_interval'])) {
            $model->batchInterval = $map['batch_interval'];
        }

        if (isset($map['max_failed_nodes'])) {
            $model->maxFailedNodes = $map['max_failed_nodes'];
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
