<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody\loadBalancers\loadBalancer;

class loadBalancers extends Model
{
    /**
     * @var loadBalancer[]
     */
    public $loadBalancer;
    protected $_name = [
        'loadBalancer' => 'LoadBalancer',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancer)) {
            Model::validateArray($this->loadBalancer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancer) {
            if (\is_array($this->loadBalancer)) {
                $res['LoadBalancer'] = [];
                $n1 = 0;
                foreach ($this->loadBalancer as $item1) {
                    $res['LoadBalancer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LoadBalancer'])) {
            if (!empty($map['LoadBalancer'])) {
                $model->loadBalancer = [];
                $n1 = 0;
                foreach ($map['LoadBalancer'] as $item1) {
                    $model->loadBalancer[$n1] = loadBalancer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
