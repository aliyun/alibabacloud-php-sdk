<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceAllocationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceAllocationsResponseBody\allocations\allocation;
use AlibabaCloud\Tea\Model;

class allocations extends Model
{
    /**
     * @var allocation[]
     */
    public $allocation;
    protected $_name = [
        'allocation' => 'Allocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocation) {
            $res['Allocation'] = [];
            if (null !== $this->allocation && \is_array($this->allocation)) {
                $n = 0;
                foreach ($this->allocation as $item) {
                    $res['Allocation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Allocation'])) {
            if (!empty($map['Allocation'])) {
                $model->allocation = [];
                $n                 = 0;
                foreach ($map['Allocation'] as $item) {
                    $model->allocation[$n++] = null !== $item ? allocation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
