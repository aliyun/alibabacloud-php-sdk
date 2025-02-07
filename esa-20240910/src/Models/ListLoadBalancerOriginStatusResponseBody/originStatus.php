<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusResponseBody;

use AlibabaCloud\Dara\Model;

class originStatus extends Model
{
    /**
     * @var int
     */
    public $loadBalancerId;
    /**
     * @var int
     */
    public $originId;
    /**
     * @var int
     */
    public $poolId;
    /**
     * @var string
     */
    public $poolType;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'originId'       => 'OriginId',
        'poolId'         => 'PoolId',
        'poolType'       => 'PoolType',
        'reason'         => 'Reason',
        'status'         => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
