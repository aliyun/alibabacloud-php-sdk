<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\defaultAddrPools\defaultAddrPool;

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
        if (\is_array($this->defaultAddrPool)) {
            Model::validateArray($this->defaultAddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultAddrPool) {
            if (\is_array($this->defaultAddrPool)) {
                $res['DefaultAddrPool'] = [];
                $n1 = 0;
                foreach ($this->defaultAddrPool as $item1) {
                    $res['DefaultAddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DefaultAddrPool'])) {
            if (!empty($map['DefaultAddrPool'])) {
                $model->defaultAddrPool = [];
                $n1 = 0;
                foreach ($map['DefaultAddrPool'] as $item1) {
                    $model->defaultAddrPool[$n1++] = defaultAddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
