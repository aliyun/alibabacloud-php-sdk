<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImagePipelineRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $baseImageType;

    /**
     * @var string
     */
    public $baseImage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @var string
     */
    public $buildContent;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $addAccount;

    /**
     * @var string[]
     */
    public $toRegionId;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'tag'                     => 'Tag',
        'baseImageType'           => 'BaseImageType',
        'baseImage'               => 'BaseImage',
        'name'                    => 'Name',
        'description'             => 'Description',
        'imageName'               => 'ImageName',
        'vSwitchId'               => 'VSwitchId',
        'instanceType'            => 'InstanceType',
        'systemDiskSize'          => 'SystemDiskSize',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'buildContent'            => 'BuildContent',
        'clientToken'             => 'ClientToken',
        'addAccount'              => 'AddAccount',
        'toRegionId'              => 'ToRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->baseImageType) {
            $res['BaseImageType'] = $this->baseImageType;
        }
        if (null !== $this->baseImage) {
            $res['BaseImage'] = $this->baseImage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->deleteInstanceOnFailure) {
            $res['DeleteInstanceOnFailure'] = $this->deleteInstanceOnFailure;
        }
        if (null !== $this->buildContent) {
            $res['BuildContent'] = $this->buildContent;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->toRegionId) {
            $res['ToRegionId'] = $this->toRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImagePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['BaseImageType'])) {
            $model->baseImageType = $map['BaseImageType'];
        }
        if (isset($map['BaseImage'])) {
            $model->baseImage = $map['BaseImage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['DeleteInstanceOnFailure'])) {
            $model->deleteInstanceOnFailure = $map['DeleteInstanceOnFailure'];
        }
        if (isset($map['BuildContent'])) {
            $model->buildContent = $map['BuildContent'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }
        if (isset($map['ToRegionId'])) {
            if (!empty($map['ToRegionId'])) {
                $model->toRegionId = $map['ToRegionId'];
            }
        }

        return $model;
    }
}
