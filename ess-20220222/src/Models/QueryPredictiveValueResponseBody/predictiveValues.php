<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveValueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveValueResponseBody\predictiveValues\predictiveValue;

class predictiveValues extends Model
{
    /**
     * @var predictiveValue[]
     */
    public $predictiveValue;
    protected $_name = [
        'predictiveValue' => 'PredictiveValue',
    ];

    public function validate()
    {
        if (\is_array($this->predictiveValue)) {
            Model::validateArray($this->predictiveValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predictiveValue) {
            if (\is_array($this->predictiveValue)) {
                $res['PredictiveValue'] = [];
                $n1 = 0;
                foreach ($this->predictiveValue as $item1) {
                    $res['PredictiveValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PredictiveValue'])) {
            if (!empty($map['PredictiveValue'])) {
                $model->predictiveValue = [];
                $n1 = 0;
                foreach ($map['PredictiveValue'] as $item1) {
                    $model->predictiveValue[$n1] = predictiveValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
