<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\instance\addrPools\addrPool;

class addrPools extends Model
{
    /**
     * @var addrPool[]
     */
    public $addrPool;
    protected $_name = [
        'addrPool' => 'AddrPool',
    ];

    public function validate()
    {
        if (\is_array($this->addrPool)) {
            Model::validateArray($this->addrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPool) {
            if (\is_array($this->addrPool)) {
                $res['AddrPool'] = [];
                $n1              = 0;
                foreach ($this->addrPool as $item1) {
                    $res['AddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddrPool'])) {
            if (!empty($map['AddrPool'])) {
                $model->addrPool = [];
                $n1              = 0;
                foreach ($map['AddrPool'] as $item1) {
                    $model->addrPool[$n1++] = addrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
