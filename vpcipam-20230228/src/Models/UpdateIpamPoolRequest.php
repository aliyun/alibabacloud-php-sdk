<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpamPoolRequest extends Model
{
    /**
     * @example 28
     *
     * @var int
     */
    public $allocationDefaultCidrMask;

    /**
     * @example 32
     *
     * @var int
     */
    public $allocationMaxCidrMask;

    /**
     * @example 8
     *
     * @var int
     */
    public $allocationMinCidrMask;

    /**
     * @example true
     *
     * @var bool
     */
    public $clearAllocationDefaultCidrMask;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example test description
     *
     * @var string
     */
    public $ipamPoolDescription;

    /**
     * @description This parameter is required.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @example test
     *
     * @var string
     */
    public $ipamPoolName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
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
    protected $_name = [
        'allocationDefaultCidrMask'      => 'AllocationDefaultCidrMask',
        'allocationMaxCidrMask'          => 'AllocationMaxCidrMask',
        'allocationMinCidrMask'          => 'AllocationMinCidrMask',
        'clearAllocationDefaultCidrMask' => 'ClearAllocationDefaultCidrMask',
        'clientToken'                    => 'ClientToken',
        'dryRun'                         => 'DryRun',
        'ipamPoolDescription'            => 'IpamPoolDescription',
        'ipamPoolId'                     => 'IpamPoolId',
        'ipamPoolName'                   => 'IpamPoolName',
        'ownerAccount'                   => 'OwnerAccount',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationDefaultCidrMask) {
            $res['AllocationDefaultCidrMask'] = $this->allocationDefaultCidrMask;
        }
        if (null !== $this->allocationMaxCidrMask) {
            $res['AllocationMaxCidrMask'] = $this->allocationMaxCidrMask;
        }
        if (null !== $this->allocationMinCidrMask) {
            $res['AllocationMinCidrMask'] = $this->allocationMinCidrMask;
        }
        if (null !== $this->clearAllocationDefaultCidrMask) {
            $res['ClearAllocationDefaultCidrMask'] = $this->clearAllocationDefaultCidrMask;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipamPoolDescription) {
            $res['IpamPoolDescription'] = $this->ipamPoolDescription;
        }
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->ipamPoolName) {
            $res['IpamPoolName'] = $this->ipamPoolName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpamPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationDefaultCidrMask'])) {
            $model->allocationDefaultCidrMask = $map['AllocationDefaultCidrMask'];
        }
        if (isset($map['AllocationMaxCidrMask'])) {
            $model->allocationMaxCidrMask = $map['AllocationMaxCidrMask'];
        }
        if (isset($map['AllocationMinCidrMask'])) {
            $model->allocationMinCidrMask = $map['AllocationMinCidrMask'];
        }
        if (isset($map['ClearAllocationDefaultCidrMask'])) {
            $model->clearAllocationDefaultCidrMask = $map['ClearAllocationDefaultCidrMask'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpamPoolDescription'])) {
            $model->ipamPoolDescription = $map['IpamPoolDescription'];
        }
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['IpamPoolName'])) {
            $model->ipamPoolName = $map['IpamPoolName'];
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

        return $model;
    }
}
