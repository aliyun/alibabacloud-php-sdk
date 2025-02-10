<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv6AddrPools\ipv6AddrPool;

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
        if (\is_array($this->ipv6AddrPool)) {
            Model::validateArray($this->ipv6AddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6AddrPool) {
            if (\is_array($this->ipv6AddrPool)) {
                $res['Ipv6AddrPool'] = [];
                $n1                  = 0;
                foreach ($this->ipv6AddrPool as $item1) {
                    $res['Ipv6AddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6AddrPool'])) {
            if (!empty($map['Ipv6AddrPool'])) {
                $model->ipv6AddrPool = [];
                $n1                  = 0;
                foreach ($map['Ipv6AddrPool'] as $item1) {
                    $model->ipv6AddrPool[$n1++] = ipv6AddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
