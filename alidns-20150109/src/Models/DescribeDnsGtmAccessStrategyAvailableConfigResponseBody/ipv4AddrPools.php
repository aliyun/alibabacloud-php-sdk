<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv4AddrPools\ipv4AddrPool;

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
        if (\is_array($this->ipv4AddrPool)) {
            Model::validateArray($this->ipv4AddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4AddrPool) {
            if (\is_array($this->ipv4AddrPool)) {
                $res['Ipv4AddrPool'] = [];
                $n1 = 0;
                foreach ($this->ipv4AddrPool as $item1) {
                    $res['Ipv4AddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv4AddrPool'])) {
            if (!empty($map['Ipv4AddrPool'])) {
                $model->ipv4AddrPool = [];
                $n1 = 0;
                foreach ($map['Ipv4AddrPool'] as $item1) {
                    $model->ipv4AddrPool[$n1++] = ipv4AddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
