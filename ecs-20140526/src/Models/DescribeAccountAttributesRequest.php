<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountAttributesRequest extends Model
{
    /**
     * @description The type of resource quota N. Valid values of N: 1 to 8. Valid values:
     *
     *   instance-network-type: available network types
     *
     *   max-security-groups: the maximum number of security groups
     *
     *   max-elastic-network-interfaces: the maximum number of ENIs
     *
     *   max-postpaid-instance-vcpu-count: the maximum number of vCPUs for pay-as-you-go instances
     *
     *   max-spot-instance-vcpu-count: the maximum number of vCPUs for preemptible instances
     *
     *   used-postpaid-instance-vcpu-count: the number of vCPUs that have been allocated to pay-as-you-go instances
     *
     *   used-spot-instance-vcpu-count: the number of vCPUs that have been allocated to preemptible instances
     *
     *   max-postpaid-yundisk-capacity: the maximum capacity of pay-as-you-go data disks(This value is deprecated)
     *
     *   used-postpaid-yundisk-capacity: the capacity of pay-as-you-go disks that have been created(This value is deprecated)
     *
     *   max-dedicated-hosts: the maximum number of dedicated hosts
     *
     *   supported-postpaid-instance-types: the instance types of pay-as-you-go I/O optimized instances
     *
     *   max-axt-command-count: the maximum number of Cloud Assistant commands
     *
     *   max-axt-invocation-daily: the maximum number of Cloud Assistant command executions per day
     *
     *   real-name-authentication: whether the account has passed the real-name verification
     *
     **
     *
     **Note**You must pass the real-name verification before you create an ECS instance in the Chinese mainland regions.
     *
     *   max-cloud-assistant-activation-count: the maximum number of activation codes that can be created to use to register managed instances
     *
     * This parameter is empty by default.
     * @example max-security-groups
     *
     * @var string[]
     */
    public $attributeName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent list of regions.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the zone in which the resource resides.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'attributeName'        => 'AttributeName',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            if (!empty($map['AttributeName'])) {
                $model->attributeName = $map['AttributeName'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
