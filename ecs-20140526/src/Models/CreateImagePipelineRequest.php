<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImagePipelineRequest extends Model
{
    /**
     * @description The IDs of Alibaba Cloud accounts with which you want to share the image that is created based on the image template. You can specify up to 20 account IDs.
     *
     * @example 1234567890
     *
     * @var int[]
     */
    public $addAccount;

    /**
     * @description The source image.
     *
     *   If you set the `BaseImageType` parameter to IMAGE, set the BaseImage parameter to the ID of a custom image.
     *   If you set the `BaseImageType` parameter to IMAGE_FAMILY, set the BaseImage parameter to the name of an image family.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $baseImage;

    /**
     * @description The type of the source image. Valid values:
     *
     *   IMAGE: image
     *   IMAGE_FAMILY: image family
     *
     * @example IMAGE
     *
     * @var string
     */
    public $baseImageType;

    /**
     * @description The content of the image template. The content cannot exceed 16 KB in size and can contain up to 127 commands. For information about the commands that are supported by the image template, see the "Usage notes" section in this topic.
     *
     * @example FROM IMAGE:m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $buildContent;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. **The token can contain only ASCII characters and cannot exceed 64 characters in length.** For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to release the intermediate instance if the image cannot be created. Valid values:
     *
     *   true: releases the intermediate instance if the image cannot be created.
     *   false: does not release the intermediate instance if the image cannot be created.
     *
     * > If the intermediate instance cannot be started, the instance is automatically released.
     * @example true
     *
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @description The description of the image template. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The prefix of the image name. The prefix must be 2 to 64 characters in length. The prefix must start with a letter but cannot start with `http://` or `https://`. The prefix can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * The system generates the final image name that consists of the specified prefix and the ID of the build task (`ExecutionId`) in the `{ImageName}_{ExecutionId}` format.
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The instance type. You can call the [DescribeInstanceTypes](~~25620~~) to query supported instance types.
     *
     * If you do not specify this parameter, an instance type that provides the fewest vCPUs and memory resources is selected. This configuration is subject to the resource availability of instance types. For example, the ecs.g6.large instance type is selected. If the available ecs.g6.large resources are insufficient, the ecs.g6.xlarge instance type is selected.
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The size of the outbound public bandwidth of the intermediate instance. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example 0
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the image template. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * > If you do not specify the `Name` parameter, the value of the `ImagePipelineId` return parameter is used.
     * @example testImagePipeline
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the image template that you want to create. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4p****
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
     * @description The size of the system disk of the intermediate instance. Unit: GiB. Valid values: 20 to 500.
     *
     * Default value: 40.
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags that you want to add to the image template.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The IDs of regions to which you want to distribute the image that is created based on the image template. You can specify up to 20 region IDs.
     *
     * If you do not specify this parameter, the image is created only in the current region.
     * @example cn-hangzhou
     *
     * @var string[]
     */
    public $toRegionId;

    /**
     * @description The ID of the vSwitch.
     *
     * If you do not specify this parameter, a new virtual private cloud (VPC) and vSwitch are created by default. Make sure that the VPC quota of your account is sufficient. For more information, see [Limits](~~27750~~).
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'addAccount'              => 'AddAccount',
        'baseImage'               => 'BaseImage',
        'baseImageType'           => 'BaseImageType',
        'buildContent'            => 'BuildContent',
        'clientToken'             => 'ClientToken',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'description'             => 'Description',
        'imageName'               => 'ImageName',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name'                    => 'Name',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'systemDiskSize'          => 'SystemDiskSize',
        'tag'                     => 'Tag',
        'toRegionId'              => 'ToRegionId',
        'vSwitchId'               => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->baseImage) {
            $res['BaseImage'] = $this->baseImage;
        }
        if (null !== $this->baseImageType) {
            $res['BaseImageType'] = $this->baseImageType;
        }
        if (null !== $this->buildContent) {
            $res['BuildContent'] = $this->buildContent;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deleteInstanceOnFailure) {
            $res['DeleteInstanceOnFailure'] = $this->deleteInstanceOnFailure;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (null !== $this->toRegionId) {
            $res['ToRegionId'] = $this->toRegionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }
        if (isset($map['BaseImage'])) {
            $model->baseImage = $map['BaseImage'];
        }
        if (isset($map['BaseImageType'])) {
            $model->baseImageType = $map['BaseImageType'];
        }
        if (isset($map['BuildContent'])) {
            $model->buildContent = $map['BuildContent'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeleteInstanceOnFailure'])) {
            $model->deleteInstanceOnFailure = $map['DeleteInstanceOnFailure'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
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
        if (isset($map['ToRegionId'])) {
            if (!empty($map['ToRegionId'])) {
                $model->toRegionId = $map['ToRegionId'];
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
