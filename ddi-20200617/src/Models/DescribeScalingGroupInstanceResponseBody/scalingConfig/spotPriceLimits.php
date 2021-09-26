<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig;

use AlibabaCloud\Tea\Model;

class spotPriceLimits extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig\spotPriceLimits\spotPriceLimits[]
     */
    public $spotPriceLimits;
    protected $_name = [
        'spotPriceLimits' => 'spotPriceLimits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotPriceLimits) {
            $res['spotPriceLimits'] = [];
            if (null !== $this->spotPriceLimits && \is_array($this->spotPriceLimits)) {
                $n = 0;
                foreach ($this->spotPriceLimits as $item) {
                    $res['spotPriceLimits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPriceLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spotPriceLimits'])) {
            if (!empty($map['spotPriceLimits'])) {
                $model->spotPriceLimits = [];
                $n                      = 0;
                foreach ($map['spotPriceLimits'] as $item) {
                    $model->spotPriceLimits[$n++] = null !== $item ? \AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig\spotPriceLimits\spotPriceLimits::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
