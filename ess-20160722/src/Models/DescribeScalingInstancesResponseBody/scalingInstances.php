<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingInstancesResponseBody;

use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingInstancesResponseBody\scalingInstances\scalingInstance;
use AlibabaCloud\Tea\Model;

class scalingInstances extends Model
{
    /**
     * @var scalingInstance[]
     */
    public $scalingInstance;
    protected $_name = [
        'scalingInstance' => 'ScalingInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingInstance) {
            $res['ScalingInstance'] = [];
            if (null !== $this->scalingInstance && \is_array($this->scalingInstance)) {
                $n = 0;
                foreach ($this->scalingInstance as $item) {
                    $res['ScalingInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingInstance'])) {
            if (!empty($map['ScalingInstance'])) {
                $model->scalingInstance = [];
                $n                      = 0;
                foreach ($map['ScalingInstance'] as $item) {
                    $model->scalingInstance[$n++] = null !== $item ? scalingInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
