<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Optimization extends Model
{
    /**
     * @var float
     */
    public $learningRate;

    /**
     * @var string
     */
    public $optimizer;
    protected $_name = [
        'learningRate' => 'LearningRate',
        'optimizer' => 'Optimizer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
