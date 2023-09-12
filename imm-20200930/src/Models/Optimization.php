<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Optimization extends Model
{
    /**
     * @example 0.01
     *
     * @var float
     */
    public $learningRate;

    /**
     * @example SGD
     *
     * @var string
     */
    public $optimizer;
    protected $_name = [
        'learningRate' => 'LearningRate',
        'optimizer'    => 'Optimizer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->learningRate) {
            $res['LearningRate'] = $this->learningRate;
        }
        if (null !== $this->optimizer) {
            $res['Optimizer'] = $this->optimizer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Optimization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LearningRate'])) {
            $model->learningRate = $map['LearningRate'];
        }
        if (isset($map['Optimizer'])) {
            $model->optimizer = $map['Optimizer'];
        }

        return $model;
    }
}
