<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoProvisioningGroupRequest extends Model
{
    /**
     * @description The ID of the auto provisioning group to be deleted.
     *
     * @example apg-bpuf6jel2bbl62wh13****
     *
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @example 123456
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the auto provisioning group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @example 123456
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to release instances in the auto provisioning group. Valid values:
     *
     *   true: releases instances in the auto provisioning group.
     *   false: retains instances in the auto provisioning group.
     *
     * @example true
     *
     * @var bool
     */
    public $terminateInstances;
    protected $_name = [
        'autoProvisioningGroupId' => 'AutoProvisioningGroupId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'terminateInstances'      => 'TerminateInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
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
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoProvisioningGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
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
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }

        return $model;
    }
}
