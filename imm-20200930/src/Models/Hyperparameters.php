<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Hyperparameters extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $backupInterval;

    /**
     * @example 32
     *
     * @var int
     */
    public $batchSize;

    /**
     * @example 4
     *
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
     * @example 10
     *
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
        'backupInterval'    => 'BackupInterval',
        'batchSize'         => 'BatchSize',
        'dataLoaderWorkers' => 'DataLoaderWorkers',
        'evaluator'         => 'Evaluator',
        'inputSize'         => 'InputSize',
        'maxEpoch'          => 'MaxEpoch',
        'optimization'      => 'Optimization',
        'schedule'          => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Evaluator'] = null !== $this->evaluator ? $this->evaluator->toMap() : null;
        }
        if (null !== $this->inputSize) {
            $res['InputSize'] = $this->inputSize;
        }
        if (null !== $this->maxEpoch) {
            $res['MaxEpoch'] = $this->maxEpoch;
        }
        if (null !== $this->optimization) {
            $res['Optimization'] = null !== $this->optimization ? $this->optimization->toMap() : null;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Hyperparameters
     */
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
                $model->inputSize = $map['InputSize'];
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
