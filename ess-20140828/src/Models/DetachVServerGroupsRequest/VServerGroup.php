<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsRequest;

use AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsRequest\VServerGroup\VServerGroupAttribute;
use AlibabaCloud\Tea\Model;

class VServerGroup extends Model
{
    /**
     * @var VServerGroupAttribute[]
     */
    public $VServerGroupAttribute;

    /**
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'VServerGroupAttribute' => 'VServerGroupAttribute',
        'loadBalancerId'        => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupAttribute) {
            $res['VServerGroupAttribute'] = [];
            if (null !== $this->VServerGroupAttribute && \is_array($this->VServerGroupAttribute)) {
                $n = 0;
                foreach ($this->VServerGroupAttribute as $item) {
                    $res['VServerGroupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupAttribute'])) {
            if (!empty($map['VServerGroupAttribute'])) {
                $model->VServerGroupAttribute = [];
                $n                            = 0;
                foreach ($map['VServerGroupAttribute'] as $item) {
                    $model->VServerGroupAttribute[$n++] = null !== $item ? VServerGroupAttribute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
