<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest\mergeMethodArgs;

use AlibabaCloud\Dara\Model;

class weight extends Model
{
    /**
     * @var float[]
     */
    public $weights;
    protected $_name = [
        'weights' => 'Weights',
    ];

    public function validate()
    {
        if (\is_array($this->weights)) {
            Model::validateArray($this->weights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->weights) {
            if (\is_array($this->weights)) {
                $res['Weights'] = [];
                $n1 = 0;
                foreach ($this->weights as $item1) {
                    $res['Weights'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Weights'])) {
            if (!empty($map['Weights'])) {
                $model->weights = [];
                $n1 = 0;
                foreach ($map['Weights'] as $item1) {
                    $model->weights[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
