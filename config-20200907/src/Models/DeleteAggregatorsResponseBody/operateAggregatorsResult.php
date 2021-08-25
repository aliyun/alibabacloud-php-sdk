<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult\operateAggregators;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateAggregators) {
            $res['OperateAggregators'] = [];
            if (null !== $this->operateAggregators && \is_array($this->operateAggregators)) {
                $n = 0;
                foreach ($this->operateAggregators as $item) {
                    $res['OperateAggregators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateAggregatorsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateAggregators'])) {
            if (!empty($map['OperateAggregators'])) {
                $model->operateAggregators = [];
                $n                         = 0;
                foreach ($map['OperateAggregators'] as $item) {
                    $model->operateAggregators[$n++] = null !== $item ? operateAggregators::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
