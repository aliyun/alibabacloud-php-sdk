<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MarketListResult extends Model
{
    /**
     * @var MarketInfo[]
     */
    public $markets;
    protected $_name = [
        'markets' => 'markets',
    ];

    public function validate()
    {
        if (\is_array($this->markets)) {
            Model::validateArray($this->markets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markets) {
            if (\is_array($this->markets)) {
                $res['markets'] = [];
                $n1 = 0;
                foreach ($this->markets as $item1) {
                    $res['markets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['markets'])) {
            if (!empty($map['markets'])) {
                $model->markets = [];
                $n1 = 0;
                foreach ($map['markets'] as $item1) {
                    $model->markets[$n1] = MarketInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
