<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerSpecRequest extends Model
{
    /**
     * @var string
     */
    public $loadBalancerSpec;
    protected $_name = [
        'loadBalancerSpec' => 'LoadBalancerSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }

        return $model;
    }
}
