<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\ipv4AddrPools\ipv4AddrPool;
use AlibabaCloud\Tea\Model;

class ipv4AddrPools extends Model
{
    /**
     * @var ipv4AddrPool[]
     */
    public $ipv4AddrPool;
    protected $_name = [
        'ipv4AddrPool' => 'Ipv4AddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('ipv4AddrPool', $this->ipv4AddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4AddrPool) {
            $res['Ipv4AddrPool'] = [];
            if (null !== $this->ipv4AddrPool && \is_array($this->ipv4AddrPool)) {
                $n = 0;
                foreach ($this->ipv4AddrPool as $item) {
                    $res['Ipv4AddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4AddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4AddrPool'])) {
            if (!empty($map['Ipv4AddrPool'])) {
                $model->ipv4AddrPool = [];
                $n                   = 0;
                foreach ($map['Ipv4AddrPool'] as $item) {
                    $model->ipv4AddrPool[$n++] = null !== $item ? ipv4AddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
