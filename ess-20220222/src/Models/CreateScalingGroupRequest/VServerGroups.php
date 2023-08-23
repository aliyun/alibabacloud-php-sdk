<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\VServerGroups\VServerGroupAttributes;
use AlibabaCloud\Tea\Model;

class VServerGroups extends Model
{
    /**
     * @description The ID of the CLB instance to which the backend vServer group belongs.
     *
     * @example lb-bp1u7etiogg38yvwz****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The attributes of the backend vServer groups.
     *
     * @var VServerGroupAttributes[]
     */
    public $VServerGroupAttributes;
    protected $_name = [
        'loadBalancerId'         => 'LoadBalancerId',
        'VServerGroupAttributes' => 'VServerGroupAttributes',
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
        if (null !== $this->VServerGroupAttributes) {
            $res['VServerGroupAttributes'] = [];
            if (null !== $this->VServerGroupAttributes && \is_array($this->VServerGroupAttributes)) {
                $n = 0;
                foreach ($this->VServerGroupAttributes as $item) {
                    $res['VServerGroupAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['VServerGroupAttributes'])) {
            if (!empty($map['VServerGroupAttributes'])) {
                $model->VServerGroupAttributes = [];
                $n                             = 0;
                foreach ($map['VServerGroupAttributes'] as $item) {
                    $model->VServerGroupAttributes[$n++] = null !== $item ? VServerGroupAttributes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
