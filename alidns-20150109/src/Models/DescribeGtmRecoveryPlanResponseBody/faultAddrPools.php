<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools\faultAddrPool;

class faultAddrPools extends Model
{
    /**
     * @var faultAddrPool[]
     */
    public $faultAddrPool;
    protected $_name = [
        'faultAddrPool' => 'FaultAddrPool',
    ];

    public function validate()
    {
        if (\is_array($this->faultAddrPool)) {
            Model::validateArray($this->faultAddrPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faultAddrPool) {
            if (\is_array($this->faultAddrPool)) {
                $res['FaultAddrPool'] = [];
                $n1 = 0;
                foreach ($this->faultAddrPool as $item1) {
                    $res['FaultAddrPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FaultAddrPool'])) {
            if (!empty($map['FaultAddrPool'])) {
                $model->faultAddrPool = [];
                $n1 = 0;
                foreach ($map['FaultAddrPool'] as $item1) {
                    $model->faultAddrPool[$n1++] = faultAddrPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
