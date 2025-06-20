<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult\operateAggregators;

class operateAggregatorsResult extends Model
{
    /**
     * @var operateAggregators[]
     */
    public $operateAggregators;
    protected $_name = [
        'operateAggregators' => 'OperateAggregators',
    ];

    public function validate()
    {
        if (\is_array($this->operateAggregators)) {
            Model::validateArray($this->operateAggregators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateAggregators) {
            if (\is_array($this->operateAggregators)) {
                $res['OperateAggregators'] = [];
                $n1 = 0;
                foreach ($this->operateAggregators as $item1) {
                    $res['OperateAggregators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperateAggregators'])) {
            if (!empty($map['OperateAggregators'])) {
                $model->operateAggregators = [];
                $n1 = 0;
                foreach ($map['OperateAggregators'] as $item1) {
                    $model->operateAggregators[$n1] = operateAggregators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
