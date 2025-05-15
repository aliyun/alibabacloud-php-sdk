<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\DataResultsTaskIndividualResultMapValue;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\errorWorker;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\taskIndividualResultList;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\warningBoundList;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results\warningWorker;

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
        'duration' => 'Duration',
        'errorWorker' => 'ErrorWorker',
        'experimentId' => 'ExperimentId',
        'mfu' => 'Mfu',
        'samplesPerSecond' => 'SamplesPerSecond',
        'secondsPerIteration' => 'SecondsPerIteration',
        'taskIndividualResultList' => 'TaskIndividualResultList',
        'taskIndividualResultMap' => 'TaskIndividualResultMap',
        'warningBoundList' => 'WarningBoundList',
        'warningWorker' => 'WarningWorker',
    ];

    public function validate()
    {
        if (\is_array($this->errorWorker)) {
            Model::validateArray($this->errorWorker);
        }
        if (\is_array($this->taskIndividualResultList)) {
            Model::validateArray($this->taskIndividualResultList);
        }
        if (\is_array($this->taskIndividualResultMap)) {
            Model::validateArray($this->taskIndividualResultMap);
        }
        if (\is_array($this->warningBoundList)) {
            Model::validateArray($this->warningBoundList);
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

        if (null !== $this->taskIndividualResultList) {
            if (\is_array($this->taskIndividualResultList)) {
                $res['TaskIndividualResultList'] = [];
                $n1 = 0;
                foreach ($this->taskIndividualResultList as $item1) {
                    $res['TaskIndividualResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskIndividualResultMap) {
            if (\is_array($this->taskIndividualResultMap)) {
                $res['TaskIndividualResultMap'] = [];
                foreach ($this->taskIndividualResultMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['TaskIndividualResultMap'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['TaskIndividualResultMap'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->warningBoundList) {
            if (\is_array($this->warningBoundList)) {
                $res['WarningBoundList'] = [];
                $n1 = 0;
                foreach ($this->warningBoundList as $item1) {
                    $res['WarningBoundList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['TaskIndividualResultList'])) {
            if (!empty($map['TaskIndividualResultList'])) {
                $model->taskIndividualResultList = [];
                $n1 = 0;
                foreach ($map['TaskIndividualResultList'] as $item1) {
                    $model->taskIndividualResultList[$n1++] = taskIndividualResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskIndividualResultMap'])) {
            if (!empty($map['TaskIndividualResultMap'])) {
                $model->taskIndividualResultMap = [];
                foreach ($map['TaskIndividualResultMap'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->taskIndividualResultMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->taskIndividualResultMap[$key1][$n2++] = DataResultsTaskIndividualResultMapValue::fromMap($item2);
                        }
                    }
                }
            }
        }

        if (isset($map['WarningBoundList'])) {
            if (!empty($map['WarningBoundList'])) {
                $model->warningBoundList = [];
                $n1 = 0;
                foreach ($map['WarningBoundList'] as $item1) {
                    $model->warningBoundList[$n1++] = warningBoundList::fromMap($item1);
                }
            }
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
