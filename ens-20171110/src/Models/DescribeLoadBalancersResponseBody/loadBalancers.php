<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponseBody\loadBalancers\loadBalancer;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancer) {
            $res['LoadBalancer'] = [];
            if (null !== $this->loadBalancer && \is_array($this->loadBalancer)) {
                $n = 0;
                foreach ($this->loadBalancer as $item) {
                    $res['LoadBalancer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancer'])) {
            if (!empty($map['LoadBalancer'])) {
                $model->loadBalancer = [];
                $n                   = 0;
                foreach ($map['LoadBalancer'] as $item) {
                    $model->loadBalancer[$n++] = null !== $item ? loadBalancer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
