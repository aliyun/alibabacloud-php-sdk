<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentSetRequest extends Model
{
    /**
     * @description The description of the deployment set. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate a client token. Make sure that a unique client token is used for each request. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example testDeploymentSetName
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description The emergency solution to use in the situation where instances in the deployment set cannot be evenly distributed to different zones due to resource insufficiency after the instances failover. Valid values:
     *
     *   CancelMembershipAndStart: removes the instances from the deployment set and starts the instances immediately after they are failed over.
     *   KeepStopped: leaves the instances in the Stopped state and starts them after resources are replenished.
     *
     * Default value: CancelMembershipAndStart.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the deployment set. The name must be 2 to 128 characters in length, It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example Default
     *
     * @var string
     */
    public $domain;

    /**
     * @description The deployment domain. Set the value to Default.
     *
     * Default: Instances in the deployment set are distributed only within the current zone.
     * @example host
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The deployment strategy. Valid values:
     *
     *   Availability: high availability strategy.
     *   AvailabilityGroup: high availability group strategy.
     *
     * Default value: Availability.
     * @example 1
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The region ID of the deployment set. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
     *
     * @example CancelMembershipAndStart
     *
     * @var string
     */
    public $onUnableToRedeployFailedInstance;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Creates a deployment set in a specific region.
     *
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
     * @description The deployment granularity. Set the value to host.
     *
     * host: Instances in the deployment set are dispersed at the granularity of hosts.
     * @example Availability
     *
     * @var string
     */
    public $strategy;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'deploymentSetName'                => 'DeploymentSetName',
        'description'                      => 'Description',
        'domain'                           => 'Domain',
        'granularity'                      => 'Granularity',
        'groupCount'                       => 'GroupCount',
        'onUnableToRedeployFailedInstance' => 'OnUnableToRedeployFailedInstance',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'regionId'                         => 'RegionId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'strategy'                         => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->onUnableToRedeployFailedInstance) {
            $res['OnUnableToRedeployFailedInstance'] = $this->onUnableToRedeployFailedInstance;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeploymentSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['OnUnableToRedeployFailedInstance'])) {
            $model->onUnableToRedeployFailedInstance = $map['OnUnableToRedeployFailedInstance'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
