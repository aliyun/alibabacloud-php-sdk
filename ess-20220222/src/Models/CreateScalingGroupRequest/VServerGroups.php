<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\VServerGroups\VServerGroupAttributes;

class VServerGroups extends Model
{
    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var VServerGroupAttributes[]
     */
    public $VServerGroupAttributes;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'VServerGroupAttributes' => 'VServerGroupAttributes',
    ];

    public function validate()
    {
        if (\is_array($this->VServerGroupAttributes)) {
            Model::validateArray($this->VServerGroupAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->VServerGroupAttributes) {
            if (\is_array($this->VServerGroupAttributes)) {
                $res['VServerGroupAttributes'] = [];
                $n1 = 0;
                foreach ($this->VServerGroupAttributes as $item1) {
                    $res['VServerGroupAttributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['VServerGroupAttributes'])) {
            if (!empty($map['VServerGroupAttributes'])) {
                $model->VServerGroupAttributes = [];
                $n1 = 0;
                foreach ($map['VServerGroupAttributes'] as $item1) {
                    $model->VServerGroupAttributes[$n1++] = VServerGroupAttributes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
