<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RankingModelVersion;

use AlibabaCloud\Tea\Model;

class runResult extends Model
{
    /**
     * @example 0.3
     *
     * @var string
     */
    public $assessAuc;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $assessGauc;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $assessLoss;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $trainAuc;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $trainGauc;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $trainLoss;
    protected $_name = [
        'assessAuc'  => 'AssessAuc',
        'assessGauc' => 'AssessGauc',
        'assessLoss' => 'AssessLoss',
        'trainAuc'   => 'TrainAuc',
        'trainGauc'  => 'TrainGauc',
        'trainLoss'  => 'TrainLoss',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assessAuc) {
            $res['AssessAuc'] = $this->assessAuc;
        }
        if (null !== $this->assessGauc) {
            $res['AssessGauc'] = $this->assessGauc;
        }
        if (null !== $this->assessLoss) {
            $res['AssessLoss'] = $this->assessLoss;
        }
        if (null !== $this->trainAuc) {
            $res['TrainAuc'] = $this->trainAuc;
        }
        if (null !== $this->trainGauc) {
            $res['TrainGauc'] = $this->trainGauc;
        }
        if (null !== $this->trainLoss) {
            $res['TrainLoss'] = $this->trainLoss;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssessAuc'])) {
            $model->assessAuc = $map['AssessAuc'];
        }
        if (isset($map['AssessGauc'])) {
            $model->assessGauc = $map['AssessGauc'];
        }
        if (isset($map['AssessLoss'])) {
            $model->assessLoss = $map['AssessLoss'];
        }
        if (isset($map['TrainAuc'])) {
            $model->trainAuc = $map['TrainAuc'];
        }
        if (isset($map['TrainGauc'])) {
            $model->trainGauc = $map['TrainGauc'];
        }
        if (isset($map['TrainLoss'])) {
            $model->trainLoss = $map['TrainLoss'];
        }

        return $model;
    }
}
