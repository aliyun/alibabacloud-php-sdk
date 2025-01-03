<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DataResultsTaskIndividualResultMapValue;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\errorWorker;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\taskIndividualResultList;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\warningBoundList;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\warningWorker;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 764
     *
     * @var float
     */
    public $duration;

    /**
     * @var errorWorker[]
     */
    public $errorWorker;

    /**
     * @example 1748274952976261121
     *
     * @var int
     */
    public $experimentId;

    /**
     * @description MFU
     *
     * @example 54.2
     *
     * @var float
     */
    public $mfu;

    /**
     * @example 10
     *
     * @var float
     */
    public $samplesPerSecond;

    /**
     * @example 1000
     *
     * @var float
     */
    public $secondsPerIteration;

    /**
     * @var taskIndividualResultList[]
     */
    public $taskIndividualResultList;

    /**
     * @var DataResultsTaskIndividualResultMapValue[][]
     */
    public $taskIndividualResultMap;

    /**
     * @var warningBoundList[]
     */
    public $warningBoundList;

    /**
     * @var warningWorker[]
     */
    public $warningWorker;
    protected $_name = [
        'duration'                 => 'Duration',
        'errorWorker'              => 'ErrorWorker',
        'experimentId'             => 'ExperimentId',
        'mfu'                      => 'Mfu',
        'samplesPerSecond'         => 'SamplesPerSecond',
        'secondsPerIteration'      => 'SecondsPerIteration',
        'taskIndividualResultList' => 'TaskIndividualResultList',
        'taskIndividualResultMap'  => 'TaskIndividualResultMap',
        'warningBoundList'         => 'WarningBoundList',
        'warningWorker'            => 'WarningWorker',
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
        if (null !== $this->taskIndividualResultList) {
            $res['TaskIndividualResultList'] = [];
            if (null !== $this->taskIndividualResultList && \is_array($this->taskIndividualResultList)) {
                $n = 0;
                foreach ($this->taskIndividualResultList as $item) {
                    $res['TaskIndividualResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskIndividualResultMap) {
            $res['TaskIndividualResultMap'] = $this->taskIndividualResultMap;
        }
        if (null !== $this->warningBoundList) {
            $res['WarningBoundList'] = [];
            if (null !== $this->warningBoundList && \is_array($this->warningBoundList)) {
                $n = 0;
                foreach ($this->warningBoundList as $item) {
                    $res['WarningBoundList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TaskIndividualResultList'])) {
            if (!empty($map['TaskIndividualResultList'])) {
                $model->taskIndividualResultList = [];
                $n                               = 0;
                foreach ($map['TaskIndividualResultList'] as $item) {
                    $model->taskIndividualResultList[$n++] = null !== $item ? taskIndividualResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskIndividualResultMap'])) {
            $model->taskIndividualResultMap = $map['TaskIndividualResultMap'];
        }
        if (isset($map['WarningBoundList'])) {
            if (!empty($map['WarningBoundList'])) {
                $model->warningBoundList = [];
                $n                       = 0;
                foreach ($map['WarningBoundList'] as $item) {
                    $model->warningBoundList[$n++] = null !== $item ? warningBoundList::fromMap($item) : $item;
                }
            }
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
