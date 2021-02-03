<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\domainAddrPools\domainAddrPool;
use AlibabaCloud\Tea\Model;

class domainAddrPools extends Model
{
    /**
     * @var domainAddrPool[]
     */
    public $domainAddrPool;
    protected $_name = [
        'domainAddrPool' => 'DomainAddrPool',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainAddrPool) {
            $res['DomainAddrPool'] = [];
            if (null !== $this->domainAddrPool && \is_array($this->domainAddrPool)) {
                $n = 0;
                foreach ($this->domainAddrPool as $item) {
                    $res['DomainAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainAddrPool'])) {
            if (!empty($map['DomainAddrPool'])) {
                $model->domainAddrPool = [];
                $n                     = 0;
                foreach ($map['DomainAddrPool'] as $item) {
                    $model->domainAddrPool[$n++] = null !== $item ? domainAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
