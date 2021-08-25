<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult\aggregators;
use AlibabaCloud\Tea\Model;

class aggregatorsResult extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var aggregators[]
     */
    public $aggregators;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'aggregators' => 'Aggregators',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->aggregators) {
            $res['Aggregators'] = [];
            if (null !== $this->aggregators && \is_array($this->aggregators)) {
                $n = 0;
                foreach ($this->aggregators as $item) {
                    $res['Aggregators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregatorsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Aggregators'])) {
            if (!empty($map['Aggregators'])) {
                $model->aggregators = [];
                $n                  = 0;
                foreach ($map['Aggregators'] as $item) {
                    $model->aggregators[$n++] = null !== $item ? aggregators::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
