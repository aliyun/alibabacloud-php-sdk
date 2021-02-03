<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse\failoverAddrPools\failoverAddrPool;
use AlibabaCloud\Tea\Model;

class failoverAddrPools extends Model
{
    /**
     * @var failoverAddrPool[]
     */
    public $failoverAddrPool;
    protected $_name = [
        'failoverAddrPool' => 'FailoverAddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('failoverAddrPool', $this->failoverAddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failoverAddrPool) {
            $res['FailoverAddrPool'] = [];
            if (null !== $this->failoverAddrPool && \is_array($this->failoverAddrPool)) {
                $n = 0;
                foreach ($this->failoverAddrPool as $item) {
                    $res['FailoverAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failoverAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailoverAddrPool'])) {
            if (!empty($map['FailoverAddrPool'])) {
                $model->failoverAddrPool = [];
                $n                       = 0;
                foreach ($map['FailoverAddrPool'] as $item) {
                    $model->failoverAddrPool[$n++] = null !== $item ? failoverAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
