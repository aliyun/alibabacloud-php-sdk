<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DetachVServerGroupsRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\DetachVServerGroupsRequest\VServerGroups\VServerGroupAttributes;
use AlibabaCloud\Tea\Model;

class VServerGroups extends Model
{
    /**
     * @description The ID of the Classic Load Balancer (CLB) instance to which the vServer group belongs.
     *
     * @example lb-bp1p90y3ya9h8s62d****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description Details of the vServer group attributes.
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
