<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\domainAddrPools\domainAddrPool;

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
        if (\is_array($this->domainAddrPool)) {
            Model::validateArray($this->domainAddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainAddrPool) {
            if (\is_array($this->domainAddrPool)) {
                $res['DomainAddrPool'] = [];
                $n1                    = 0;
                foreach ($this->domainAddrPool as $item1) {
                    $res['DomainAddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainAddrPool'])) {
            if (!empty($map['DomainAddrPool'])) {
                $model->domainAddrPool = [];
                $n1                    = 0;
                foreach ($map['DomainAddrPool'] as $item1) {
                    $model->domainAddrPool[$n1++] = domainAddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
