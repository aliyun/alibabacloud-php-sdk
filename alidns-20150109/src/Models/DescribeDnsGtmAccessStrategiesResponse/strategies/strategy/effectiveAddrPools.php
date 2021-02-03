<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse\strategies\strategy;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse\strategies\strategy\effectiveAddrPools\effectiveAddrPool;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('effectiveAddrPool', $this->effectiveAddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveAddrPool) {
            $res['EffectiveAddrPool'] = [];
            if (null !== $this->effectiveAddrPool && \is_array($this->effectiveAddrPool)) {
                $n = 0;
                foreach ($this->effectiveAddrPool as $item) {
                    $res['EffectiveAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectiveAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveAddrPool'])) {
            if (!empty($map['EffectiveAddrPool'])) {
                $model->effectiveAddrPool = [];
                $n                        = 0;
                foreach ($map['EffectiveAddrPool'] as $item) {
                    $model->effectiveAddrPool[$n++] = null !== $item ? effectiveAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
