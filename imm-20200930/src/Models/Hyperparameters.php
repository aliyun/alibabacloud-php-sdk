<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Hyperparameters extends Model
{
    /**
     * @var int
     */
    public $backupInterval;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var int
     */
    public $dataLoaderWorkers;

    /**
     * @var CustomParams
     */
    public $evaluator;

    /**
     * @var int[]
     */
    public $inputSize;

    /**
     * @var int
     */
    public $maxEpoch;

    /**
     * @var Optimization
     */
    public $optimization;

    /**
     * @var Schedule
     */
    public $schedule;
    protected $_name = [
        'backupInterval' => 'BackupInterval',
        'batchSize' => 'BatchSize',
        'dataLoaderWorkers' => 'DataLoaderWorkers',
        'evaluator' => 'Evaluator',
        'inputSize' => 'InputSize',
        'maxEpoch' => 'MaxEpoch',
        'optimization' => 'Optimization',
        'schedule' => 'Schedule',
    ];

    public function validate()
    {
        if (null !== $this->evaluator) {
            $this->evaluator->validate();
        }
        if (\is_array($this->inputSize)) {
            Model::validateArray($this->inputSize);
        }
        if (null !== $this->optimization) {
            $this->optimization->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupInterval) {
            $res['BackupInterval'] = $this->backupInterval;
        }

        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->dataLoaderWorkers) {
            $res['DataLoaderWorkers'] = $this->dataLoaderWorkers;
        }

        if (null !== $this->evaluator) {
            $res['Evaluator'] = null !== $this->evaluator ? $this->evaluator->toArray($noStream) : $this->evaluator;
        }

        if (null !== $this->inputSize) {
            if (\is_array($this->inputSize)) {
                $res['InputSize'] = [];
                $n1 = 0;
                foreach ($this->inputSize as $item1) {
                    $res['InputSize'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxEpoch) {
            $res['MaxEpoch'] = $this->maxEpoch;
        }

        if (null !== $this->optimization) {
            $res['Optimization'] = null !== $this->optimization ? $this->optimization->toArray($noStream) : $this->optimization;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
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
        if (isset($map['BackupInterval'])) {
            $model->backupInterval = $map['BackupInterval'];
        }

        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['DataLoaderWorkers'])) {
            $model->dataLoaderWorkers = $map['DataLoaderWorkers'];
        }

        if (isset($map['Evaluator'])) {
            $model->evaluator = CustomParams::fromMap($map['Evaluator']);
        }

        if (isset($map['InputSize'])) {
            if (!empty($map['InputSize'])) {
                $model->inputSize = [];
                $n1 = 0;
                foreach ($map['InputSize'] as $item1) {
                    $model->inputSize[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxEpoch'])) {
            $model->maxEpoch = $map['MaxEpoch'];
        }

        if (isset($map['Optimization'])) {
            $model->optimization = Optimization::fromMap($map['Optimization']);
        }

        if (isset($map['Schedule'])) {
            $model->schedule = Schedule::fromMap($map['Schedule']);
        }

        return $model;
    }
}
