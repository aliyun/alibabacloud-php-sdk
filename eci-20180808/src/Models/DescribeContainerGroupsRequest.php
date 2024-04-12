<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsRequest extends Model
{
    /**
     * @description The computing power type of the elastic container instance. A value of economy specifies economic elastic container instances.
     *
     * @example economy
     *
     * @var string
     */
    public $computeCategory;

    /**
     * @description The IDs of the elastic container instances in JSON format. You can specify up to 20 IDs.
     *
     * @example ["eci-bp17gw49eu09yiwm****", "eci-bp19aq49du01abcm****", "eci-2zegym1qhbmdfr1s****"]
     *
     * @var string
     */
    public $containerGroupIds;

    /**
     * @description The name of the elastic container instance.
     *
     * @example test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description The maximum number of resources to return. Default value: 20. Maximum value: 20.
     *
     * >  The number of returned resources is less than or equal to the specified number.
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token that determines the start point of the query. If this parameter is left empty, all results have been returned.
     *
     * > You do not need to specify this parameter in the first request. Starting from the second request, you can obtain the token from the result returned by the previous request.
     * @example d78f2dd8-5979-42fe-****-b16db43be5bc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aekzh43v*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the security group to which the instance belongs.
     *
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the elastic container instance. Valid values:
     *
     *   Pending: The instance is being started.
     *   Running: The instance is running.
     *   Succeeded: The instance runs successfully.
     *   Failed: The instance fails to run.
     *   Scheduling: The instance is being created.
     *   ScheduleFailed: The instance fails to be created.
     *   Restarting: The instance is being restarted.
     *   Updating: The instance is being updated.
     *   Terminating: The instance is being terminated.
     *   Expired: The instance expires.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the instances.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch to which the elastic container instances are connected.
     *
     * @example vsw-bp1jrgfqqy54kg5hc****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Specify whether to return event information.
     *
     * @example true
     *
     * @var bool
     */
    public $withEvent;

    /**
     * @description The ID of the zone in which the elastic container instances are deployed. If you do not specify this parameter, the system selects a zone.
     *
     * This parameter is empty by default.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeCategory'      => 'ComputeCategory',
        'containerGroupIds'    => 'ContainerGroupIds',
        'containerGroupName'   => 'ContainerGroupName',
        'limit'                => 'Limit',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityGroupId'      => 'SecurityGroupId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'vSwitchId'            => 'VSwitchId',
        'withEvent'            => 'WithEvent',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeCategory) {
            $res['ComputeCategory'] = $this->computeCategory;
        }
        if (null !== $this->containerGroupIds) {
            $res['ContainerGroupIds'] = $this->containerGroupIds;
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->withEvent) {
            $res['WithEvent'] = $this->withEvent;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeCategory'])) {
            $model->computeCategory = $map['ComputeCategory'];
        }
        if (isset($map['ContainerGroupIds'])) {
            $model->containerGroupIds = $map['ContainerGroupIds'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['WithEvent'])) {
            $model->withEvent = $map['WithEvent'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
