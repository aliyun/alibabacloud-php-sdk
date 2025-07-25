<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools\faultAddrPool;
use AlibabaCloud\Tea\Model;

class faultAddrPools extends Model
{
    /**
     * @var faultAddrPool[]
     */
    public $faultAddrPool;
    protected $_name = [
        'faultAddrPool' => 'FaultAddrPool',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->faultAddrPool) {
            $res['FaultAddrPool'] = [];
            if (null !== $this->faultAddrPool && \is_array($this->faultAddrPool)) {
                $n = 0;
                foreach ($this->faultAddrPool as $item) {
                    $res['FaultAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faultAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaultAddrPool'])) {
            if (!empty($map['FaultAddrPool'])) {
                $model->faultAddrPool = [];
                $n = 0;
                foreach ($map['FaultAddrPool'] as $item) {
                    $model->faultAddrPool[$n++] = null !== $item ? faultAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
