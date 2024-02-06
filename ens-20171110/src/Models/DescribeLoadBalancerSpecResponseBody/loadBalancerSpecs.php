<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecResponseBody;

use AlibabaCloud\Tea\Model;

class loadBalancerSpecs extends Model
{
    /**
     * @description The display name of the instance type.
     *
     * @example elb.s1.small
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The specifications of the ELB instance.
     *
     * @example elb.s1.small
     *
     * @var string
     */
    public $loadBalancerSpec;
    protected $_name = [
        'displayName'      => 'DisplayName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }

        return $model;
    }
}
