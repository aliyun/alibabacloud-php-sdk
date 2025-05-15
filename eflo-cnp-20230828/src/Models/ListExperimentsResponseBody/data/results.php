<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results\errorWorker;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results\warningWorker;

class results extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var errorWorker[]
     */
    public $errorWorker;

    /**
     * @var int
     */
    public $experimentId;

    /**
     * @var float
     */
    public $mfu;

    /**
     * @var float
     */
    public $samplesPerSecond;

    /**
     * @var float
     */
    public $secondsPerIteration;

    /**
     * @var warningWorker[]
     */
    public $warningWorker;
    protected $_name = [
        'duration' => 'Duration',
        'errorWorker' => 'ErrorWorker',
        'experimentId' => 'ExperimentId',
        'mfu' => 'Mfu',
        'samplesPerSecond' => 'SamplesPerSecond',
        'secondsPerIteration' => 'SecondsPerIteration',
        'warningWorker' => 'WarningWorker',
    ];

    public function validate()
    {
        if (\is_array($this->errorWorker)) {
            Model::validateArray($this->errorWorker);
        }
        if (\is_array($this->warningWorker)) {
            Model::validateArray($this->warningWorker);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->errorWorker) {
            if (\is_array($this->errorWorker)) {
                $res['ErrorWorker'] = [];
                $n1 = 0;
                foreach ($this->errorWorker as $item1) {
                    $res['ErrorWorker'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->warningWorker)) {
                $res['WarningWorker'] = [];
                $n1 = 0;
                foreach ($this->warningWorker as $item1) {
                    $res['WarningWorker'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ErrorWorker'])) {
            if (!empty($map['ErrorWorker'])) {
                $model->errorWorker = [];
                $n1 = 0;
                foreach ($map['ErrorWorker'] as $item1) {
                    $model->errorWorker[$n1++] = errorWorker::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['WarningWorker'] as $item1) {
                    $model->warningWorker[$n1++] = warningWorker::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
