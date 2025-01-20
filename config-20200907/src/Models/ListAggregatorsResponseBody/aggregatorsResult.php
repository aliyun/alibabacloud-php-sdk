<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult\aggregators;

class aggregatorsResult extends Model
{
    /**
     * @var aggregators[]
     */
    public $aggregators;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'aggregators' => 'Aggregators',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->aggregators)) {
            Model::validateArray($this->aggregators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregators) {
            if (\is_array($this->aggregators)) {
                $res['Aggregators'] = [];
                $n1                 = 0;
                foreach ($this->aggregators as $item1) {
                    $res['Aggregators'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Aggregators'])) {
            if (!empty($map['Aggregators'])) {
                $model->aggregators = [];
                $n1                 = 0;
                foreach ($map['Aggregators'] as $item1) {
                    $model->aggregators[$n1++] = aggregators::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
