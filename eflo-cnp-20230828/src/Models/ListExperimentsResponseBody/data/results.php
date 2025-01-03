<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results\errorWorker;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results\warningWorker;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description Duration
     *
     * @example 20
     *
     * @var float
     */
    public $duration;

    /**
     * @description Error nodes
     *
     * @var errorWorker[]
     */
    public $errorWorker;

    /**
     * @description Parameter name
     *
     * @example 440
     *
     * @var int
     */
    public $experimentId;

    /**
     * @description MFU
     *
     * @example 34
     *
     * @var float
     */
    public $mfu;

    /**
     * @description Samples per second
     *
     * @example 10
     *
     * @var float
     */
    public $samplesPerSecond;

    /**
     * @description Seconds per iteration
     *
     * @example 89
     *
     * @var float
     */
    public $secondsPerIteration;

    /**
     * @description Warning worker
     *
     * @var warningWorker[]
     */
    public $warningWorker;
    protected $_name = [
        'duration'            => 'Duration',
        'errorWorker'         => 'ErrorWorker',
        'experimentId'        => 'ExperimentId',
        'mfu'                 => 'Mfu',
        'samplesPerSecond'    => 'SamplesPerSecond',
        'secondsPerIteration' => 'SecondsPerIteration',
        'warningWorker'       => 'WarningWorker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->errorWorker) {
            $res['ErrorWorker'] = [];
            if (null !== $this->errorWorker && \is_array($this->errorWorker)) {
                $n = 0;
                foreach ($this->errorWorker as $item) {
                    $res['ErrorWorker'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->mfu) {
            $res['Mfu'] = $this->mfu;
        }
        if (null !== $this->samplesPerSecond) {
            $res['SamplesPerSecond'] = $this->samplesPerSecond;
        }
        if (null !== $this->secondsPerIteration) {
            $res['SecondsPerIteration'] = $this->secondsPerIteration;
        }
        if (null !== $this->warningWorker) {
            $res['WarningWorker'] = [];
            if (null !== $this->warningWorker && \is_array($this->warningWorker)) {
                $n = 0;
                foreach ($this->warningWorker as $item) {
                    $res['WarningWorker'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ErrorWorker'])) {
            if (!empty($map['ErrorWorker'])) {
                $model->errorWorker = [];
                $n                  = 0;
                foreach ($map['ErrorWorker'] as $item) {
                    $model->errorWorker[$n++] = null !== $item ? errorWorker::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Mfu'])) {
            $model->mfu = $map['Mfu'];
        }
        if (isset($map['SamplesPerSecond'])) {
            $model->samplesPerSecond = $map['SamplesPerSecond'];
        }
        if (isset($map['SecondsPerIteration'])) {
            $model->secondsPerIteration = $map['SecondsPerIteration'];
        }
        if (isset($map['WarningWorker'])) {
            if (!empty($map['WarningWorker'])) {
                $model->warningWorker = [];
                $n                    = 0;
                foreach ($map['WarningWorker'] as $item) {
                    $model->warningWorker[$n++] = null !== $item ? warningWorker::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
