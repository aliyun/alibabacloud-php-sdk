<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineModelsResponseBody\models;

class DescribeEdgeMachineModelsResponseBody extends Model
{
    /**
     * @var models[]
     */
    public $models;
    protected $_name = [
        'models' => 'models',
    ];

    public function validate()
    {
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
