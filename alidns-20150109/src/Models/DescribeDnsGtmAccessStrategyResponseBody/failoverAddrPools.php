<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\failoverAddrPools\failoverAddrPool;

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
        if (\is_array($this->failoverAddrPool)) {
            Model::validateArray($this->failoverAddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failoverAddrPool) {
            if (\is_array($this->failoverAddrPool)) {
                $res['FailoverAddrPool'] = [];
                $n1                      = 0;
                foreach ($this->failoverAddrPool as $item1) {
                    $res['FailoverAddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailoverAddrPool'])) {
            if (!empty($map['FailoverAddrPool'])) {
                $model->failoverAddrPool = [];
                $n1                      = 0;
                foreach ($map['FailoverAddrPool'] as $item1) {
                    $model->failoverAddrPool[$n1++] = failoverAddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
