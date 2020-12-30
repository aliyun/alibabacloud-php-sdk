<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\spotPriceLimits\spotPriceLimit;
use AlibabaCloud\Tea\Model;

class spotPriceLimits extends Model
{
    /**
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;
    protected $_name = [
        'spotPriceLimit' => 'SpotPriceLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = [];
            if (null !== $this->spotPriceLimit && \is_array($this->spotPriceLimit)) {
                $n = 0;
                foreach ($this->spotPriceLimit as $item) {
                    $res['SpotPriceLimit'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SpotPriceLimit'])) {
            if (!empty($map['SpotPriceLimit'])) {
                $model->spotPriceLimit = [];
                $n                     = 0;
                foreach ($map['SpotPriceLimit'] as $item) {
                    $model->spotPriceLimit[$n++] = null !== $item ? spotPriceLimit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
