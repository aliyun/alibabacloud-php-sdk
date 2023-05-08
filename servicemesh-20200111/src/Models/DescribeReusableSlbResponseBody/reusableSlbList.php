<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponseBody;

use AlibabaCloud\Tea\Model;

class reusableSlbList extends Model
{
    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp17xygzsxth0bwlz****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the SLB instance.
     *
     * @example ad6044b015ac54484a20c47241175bb3
     *
     * @var string
     */
    public $loadBalancerName;
    protected $_name = [
        'loadBalancerId'   => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
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
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reusableSlbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        return $model;
    }
}
