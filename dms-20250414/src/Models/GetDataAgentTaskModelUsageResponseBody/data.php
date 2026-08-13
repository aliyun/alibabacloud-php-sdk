<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetDataAgentTaskModelUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $accelerationRatio;

    /**
     * @var int
     */
    public $rateLimitedSessionCount;

    /**
     * @var float
     */
    public $totalLlmWaitDuration;

    /**
     * @var int
     */
    public $totalSessionCount;

    /**
     * @var int
     */
    public $peakTpm;

    /**
     * @var int
     */
    public $totalCallCount;

    /**
     * @var int
     */
    public $totalTokenConsumed;

    /**
     * @var int
     */
    public $usedModels;
    protected $_name = [
        'accelerationRatio' => 'AccelerationRatio',
        'rateLimitedSessionCount' => 'RateLimitedSessionCount',
        'totalLlmWaitDuration' => 'TotalLlmWaitDuration',
        'totalSessionCount' => 'TotalSessionCount',
        'peakTpm' => 'peakTpm',
        'totalCallCount' => 'totalCallCount',
        'totalTokenConsumed' => 'totalTokenConsumed',
        'usedModels' => 'usedModels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerationRatio) {
            $res['AccelerationRatio'] = $this->accelerationRatio;
        }

        if (null !== $this->rateLimitedSessionCount) {
            $res['RateLimitedSessionCount'] = $this->rateLimitedSessionCount;
        }

        if (null !== $this->totalLlmWaitDuration) {
            $res['TotalLlmWaitDuration'] = $this->totalLlmWaitDuration;
        }

        if (null !== $this->totalSessionCount) {
            $res['TotalSessionCount'] = $this->totalSessionCount;
        }

        if (null !== $this->peakTpm) {
            $res['peakTpm'] = $this->peakTpm;
        }

        if (null !== $this->totalCallCount) {
            $res['totalCallCount'] = $this->totalCallCount;
        }

        if (null !== $this->totalTokenConsumed) {
            $res['totalTokenConsumed'] = $this->totalTokenConsumed;
        }

        if (null !== $this->usedModels) {
            $res['usedModels'] = $this->usedModels;
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
        if (isset($map['AccelerationRatio'])) {
            $model->accelerationRatio = $map['AccelerationRatio'];
        }

        if (isset($map['RateLimitedSessionCount'])) {
            $model->rateLimitedSessionCount = $map['RateLimitedSessionCount'];
        }

        if (isset($map['TotalLlmWaitDuration'])) {
            $model->totalLlmWaitDuration = $map['TotalLlmWaitDuration'];
        }

        if (isset($map['TotalSessionCount'])) {
            $model->totalSessionCount = $map['TotalSessionCount'];
        }

        if (isset($map['peakTpm'])) {
            $model->peakTpm = $map['peakTpm'];
        }

        if (isset($map['totalCallCount'])) {
            $model->totalCallCount = $map['totalCallCount'];
        }

        if (isset($map['totalTokenConsumed'])) {
            $model->totalTokenConsumed = $map['totalTokenConsumed'];
        }

        if (isset($map['usedModels'])) {
            $model->usedModels = $map['usedModels'];
        }

        return $model;
    }
}
