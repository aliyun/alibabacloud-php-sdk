<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy;

class strategies extends Model
{
    /**
     * @var strategy[]
     */
    public $strategy;
    protected $_name = [
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->strategy)) {
            Model::validateArray($this->strategy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strategy) {
            if (\is_array($this->strategy)) {
                $res['Strategy'] = [];
                $n1 = 0;
                foreach ($this->strategy as $item1) {
                    $res['Strategy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Strategy'])) {
            if (!empty($map['Strategy'])) {
                $model->strategy = [];
                $n1 = 0;
                foreach ($map['Strategy'] as $item1) {
                    $model->strategy[$n1] = strategy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
