<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance;
use AlibabaCloud\Tea\Model;

class reservedInstances extends Model
{
    /**
     * @var reservedInstance[]
     */
    public $reservedInstance;
    protected $_name = [
        'reservedInstance' => 'ReservedInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstance) {
            $res['ReservedInstance'] = [];
            if (null !== $this->reservedInstance && \is_array($this->reservedInstance)) {
                $n = 0;
                foreach ($this->reservedInstance as $item) {
                    $res['ReservedInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstance'])) {
            if (!empty($map['ReservedInstance'])) {
                $model->reservedInstance = [];
                $n                       = 0;
                foreach ($map['ReservedInstance'] as $item) {
                    $model->reservedInstance[$n++] = null !== $item ? reservedInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
