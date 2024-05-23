<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup;

use AlibabaCloud\Tea\Model;

class loadBalancerIds extends Model
{
    /**
     * @var string[]
     */
    public $loadBalancerId;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            if (!empty($map['LoadBalancerId'])) {
                $model->loadBalancerId = $map['LoadBalancerId'];
            }
        }

        return $model;
    }
}
