<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\effectiveAddrPools\effectiveAddrPool;

class effectiveAddrPools extends Model
{
    /**
     * @var effectiveAddrPool[]
     */
    public $effectiveAddrPool;
    protected $_name = [
        'effectiveAddrPool' => 'EffectiveAddrPool',
    ];

    public function validate()
    {
        if (\is_array($this->effectiveAddrPool)) {
            Model::validateArray($this->effectiveAddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveAddrPool) {
            if (\is_array($this->effectiveAddrPool)) {
                $res['EffectiveAddrPool'] = [];
                $n1 = 0;
                foreach ($this->effectiveAddrPool as $item1) {
                    $res['EffectiveAddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EffectiveAddrPool'])) {
            if (!empty($map['EffectiveAddrPool'])) {
                $model->effectiveAddrPool = [];
                $n1 = 0;
                foreach ($map['EffectiveAddrPool'] as $item1) {
                    $model->effectiveAddrPool[$n1++] = effectiveAddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
