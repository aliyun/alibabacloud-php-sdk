<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\ipv6AddrPools\ipv6AddrPool;
use AlibabaCloud\Tea\Model;

class ipv6AddrPools extends Model
{
    /**
     * @var ipv6AddrPool[]
     */
    public $ipv6AddrPool;
    protected $_name = [
        'ipv6AddrPool' => 'Ipv6AddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6AddrPool', $this->ipv6AddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6AddrPool) {
            $res['Ipv6AddrPool'] = [];
            if (null !== $this->ipv6AddrPool && \is_array($this->ipv6AddrPool)) {
                $n = 0;
                foreach ($this->ipv6AddrPool as $item) {
                    $res['Ipv6AddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6AddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6AddrPool'])) {
            if (!empty($map['Ipv6AddrPool'])) {
                $model->ipv6AddrPool = [];
                $n                   = 0;
                foreach ($map['Ipv6AddrPool'] as $item) {
                    $model->ipv6AddrPool[$n++] = null !== $item ? ipv6AddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
