<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse\defaultAddrPools\defaultAddrPool;
use AlibabaCloud\Tea\Model;

class defaultAddrPools extends Model
{
    /**
     * @var defaultAddrPool[]
     */
    public $defaultAddrPool;
    protected $_name = [
        'defaultAddrPool' => 'DefaultAddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('defaultAddrPool', $this->defaultAddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultAddrPool) {
            $res['DefaultAddrPool'] = [];
            if (null !== $this->defaultAddrPool && \is_array($this->defaultAddrPool)) {
                $n = 0;
                foreach ($this->defaultAddrPool as $item) {
                    $res['DefaultAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultAddrPool'])) {
            if (!empty($map['DefaultAddrPool'])) {
                $model->defaultAddrPool = [];
                $n                      = 0;
                foreach ($map['DefaultAddrPool'] as $item) {
                    $model->defaultAddrPool[$n++] = null !== $item ? defaultAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
