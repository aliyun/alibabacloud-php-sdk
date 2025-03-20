<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusResponseBody;

use AlibabaCloud\Tea\Model;

class originStatus extends Model
{
    /**
     * @description ID of the load balancer.
     *
     * @example 99874066052****
     *
     * @var int
     */
    public $loadBalancerId;

    /**
     * @description ID of the origin.
     *
     * @example 99750209487****
     *
     * @var int
     */
    public $originId;

    /**
     * @description ID of the source address pool.
     *
     * @example 99750209487****
     *
     * @var int
     */
    public $poolId;

    /**
     * @description The origin pool to which the source belongs, under this load balancer. Only \\"default_pool\\" (default address pool) will be displayed; other types will return an empty string.
     *
     * @example default_pool
     *
     * @var string
     */
    public $poolType;

    /**
     * @description Reason for the probe failure.
     *
     * @example TCP connection error
     *
     * @var string
     */
    public $reason;

    /**
     * @description Status of the origin:
     * - Healthy(healthy): The probe result is available.
     * - Unhealthy(unhealthy): The probe result is unavailable.
     * - Unknown(unknown): Unknown, the monitor has not yet probed.
     * - Undetected(undetected): The load balancer to which the origin belongs is not bound to a monitor.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'originId' => 'OriginId',
        'poolId' => 'PoolId',
        'poolType' => 'PoolType',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->originId) {
            $res['OriginId'] = $this->originId;
        }
        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }
        if (null !== $this->poolType) {
            $res['PoolType'] = $this->poolType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['OriginId'])) {
            $model->originId = $map['OriginId'];
        }
        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }
        if (isset($map['PoolType'])) {
            $model->poolType = $map['PoolType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
