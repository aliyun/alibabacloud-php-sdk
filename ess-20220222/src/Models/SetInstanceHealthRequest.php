<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class SetInstanceHealthRequest extends Model
{
    /**
     * @description The health status of the ECS instance in the scaling group. If ECS instances do not run as expected, Auto Scaling considers the ECS instances unhealthy. Valid values:
     *
     *   Healthy
     *   Unhealthy
     *
     * >  Make sure that you have sufficient balance within your Alibaba Cloud account. If you have overdue payments within your Alibaba Cloud account, pay-as-you-go and preemptible instances are stopped or released. For information about how the states of ECS instances change when you have overdue payments within your Alibaba Cloud account, see [Overdue payments](~~170589~~).
     * @example Healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1ap6bro51a7fsa****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'healthStatus'         => 'HealthStatus',
        'instanceId'           => 'InstanceId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetInstanceHealthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
