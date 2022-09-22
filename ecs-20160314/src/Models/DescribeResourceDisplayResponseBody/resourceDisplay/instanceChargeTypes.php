<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceChargeTypes\instanceChargeType;
use AlibabaCloud\Tea\Model;

class instanceChargeTypes extends Model
{
    /**
     * @var instanceChargeType[]
     */
    public $instanceChargeType;
    protected $_name = [
        'instanceChargeType' => 'InstanceChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = [];
            if (null !== $this->instanceChargeType && \is_array($this->instanceChargeType)) {
                $n = 0;
                foreach ($this->instanceChargeType as $item) {
                    $res['InstanceChargeType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceChargeTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceChargeType'])) {
            if (!empty($map['InstanceChargeType'])) {
                $model->instanceChargeType = [];
                $n                         = 0;
                foreach ($map['InstanceChargeType'] as $item) {
                    $model->instanceChargeType[$n++] = null !== $item ? instanceChargeType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
