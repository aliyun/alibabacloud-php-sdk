<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressConfig extends Model
{
    /**
     * @var int
     */
    public $numMinibatches;

    /**
     * @var int
     */
    public $ppoMiniBatchSize;

    /**
     * @var int
     */
    public $rolloutN;

    /**
     * @var int
     */
    public $totalSteps;

    /**
     * @var int
     */
    public $trainBatchSize;
    protected $_name = [
        'numMinibatches' => 'NumMinibatches',
        'ppoMiniBatchSize' => 'PpoMiniBatchSize',
        'rolloutN' => 'RolloutN',
        'totalSteps' => 'TotalSteps',
        'trainBatchSize' => 'TrainBatchSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->numMinibatches) {
            $res['NumMinibatches'] = $this->numMinibatches;
        }

        if (null !== $this->ppoMiniBatchSize) {
            $res['PpoMiniBatchSize'] = $this->ppoMiniBatchSize;
        }

        if (null !== $this->rolloutN) {
            $res['RolloutN'] = $this->rolloutN;
        }

        if (null !== $this->totalSteps) {
            $res['TotalSteps'] = $this->totalSteps;
        }

        if (null !== $this->trainBatchSize) {
            $res['TrainBatchSize'] = $this->trainBatchSize;
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
        if (isset($map['NumMinibatches'])) {
            $model->numMinibatches = $map['NumMinibatches'];
        }

        if (isset($map['PpoMiniBatchSize'])) {
            $model->ppoMiniBatchSize = $map['PpoMiniBatchSize'];
        }

        if (isset($map['RolloutN'])) {
            $model->rolloutN = $map['RolloutN'];
        }

        if (isset($map['TotalSteps'])) {
            $model->totalSteps = $map['TotalSteps'];
        }

        if (isset($map['TrainBatchSize'])) {
            $model->trainBatchSize = $map['TrainBatchSize'];
        }

        return $model;
    }
}
