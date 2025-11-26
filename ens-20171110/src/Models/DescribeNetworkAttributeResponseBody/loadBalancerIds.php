<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->loadBalancerId)) {
            Model::validateArray($this->loadBalancerId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            if (\is_array($this->loadBalancerId)) {
                $res['LoadBalancerId'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerId as $item1) {
                    $res['LoadBalancerId'][$n1] = $item1;
                    ++$n1;
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
            if (!empty($map['LoadBalancerId'])) {
                $model->loadBalancerId = [];
                $n1 = 0;
                foreach ($map['LoadBalancerId'] as $item1) {
                    $model->loadBalancerId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
