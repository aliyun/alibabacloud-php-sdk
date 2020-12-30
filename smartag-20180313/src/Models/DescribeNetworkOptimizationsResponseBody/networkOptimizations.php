<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationsResponseBody\networkOptimizations\networkOptimization;
use AlibabaCloud\Tea\Model;

class networkOptimizations extends Model
{
    /**
     * @var networkOptimization[]
     */
    public $networkOptimization;
    protected $_name = [
        'networkOptimization' => 'NetworkOptimization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkOptimization) {
            $res['NetworkOptimization'] = [];
            if (null !== $this->networkOptimization && \is_array($this->networkOptimization)) {
                $n = 0;
                foreach ($this->networkOptimization as $item) {
                    $res['NetworkOptimization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkOptimizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkOptimization'])) {
            if (!empty($map['NetworkOptimization'])) {
                $model->networkOptimization = [];
                $n                          = 0;
                foreach ($map['NetworkOptimization'] as $item) {
                    $model->networkOptimization[$n++] = null !== $item ? networkOptimization::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
