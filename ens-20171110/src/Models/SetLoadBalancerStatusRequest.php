<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerStatusRequest extends Model
{
    /**
     * @description The ID of the ELB instance.
     *
     * This parameter is required.
     * @example lb-5t18quoohsrc3xkf86spmnu77
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The status of the listener after the modification. Valid values:
     *
     *   **Active**: The listener for the instance can forward the received traffic based on forwarding rules.
     *   **InActive**: The listener for the instance does not forward the received traffic.
     *
     * This parameter is required.
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;
    protected $_name = [
        'loadBalancerId'     => 'LoadBalancerId',
        'loadBalancerStatus' => 'LoadBalancerStatus',
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
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }

        return $model;
    }
}
