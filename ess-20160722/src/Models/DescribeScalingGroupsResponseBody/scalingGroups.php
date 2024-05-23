<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody;

use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup;
use AlibabaCloud\Tea\Model;

class scalingGroups extends Model
{
    /**
     * @var scalingGroup[]
     */
    public $scalingGroup;
    protected $_name = [
        'scalingGroup' => 'ScalingGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = [];
            if (null !== $this->scalingGroup && \is_array($this->scalingGroup)) {
                $n = 0;
                foreach ($this->scalingGroup as $item) {
                    $res['ScalingGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingGroup'])) {
            if (!empty($map['ScalingGroup'])) {
                $model->scalingGroup = [];
                $n                   = 0;
                foreach ($map['ScalingGroup'] as $item) {
                    $model->scalingGroup[$n++] = null !== $item ? scalingGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
