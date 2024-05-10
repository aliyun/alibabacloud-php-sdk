<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group to which you want to move the resource.
     *
     * This parameter is required.
     * @example rg-acfm3peow3k****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region to which the cloud resource belongs.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * This parameter is required.
     * @example vpc-hp31psbg8ec3023s6****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the resource for which you want to modify the resource group. Valid values:
     *
     *   **Vpc**
     *   **Eip**
     *   **BandwidthPackage**
     *   **PrefixList**
     *   **PublicIpAddressPool**
     *   **FlowLog**
     *   **HaVip**
     *   **TrafficMirrorFilter**
     *   **TrafficMirrorSession**
     *   **IPv4Gateway**
     *   **IPv6Gateway**
     *   **DhcpOptionsSet**
     *   **GatewayEndpoint**
     *
     * This parameter is required.
     * @example vpc
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId'   => 'NewResourceGroupId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceId'           => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
