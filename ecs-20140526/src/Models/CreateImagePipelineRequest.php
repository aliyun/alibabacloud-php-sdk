<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\advancedOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImagePipelineRequest extends Model
{
    /**
     * @description The IDs of Alibaba Cloud accounts to which to share the image that will be created based on the image template. You can specify up to 20 account IDs.
     *
     * @example 1234567890
     *
     * @var int[]
     */
    public $addAccount;

    /**
     * @description The advanced settings.
     *
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @description The source image.
     *
     *   If you set `BaseImageType` to IMAGE, set BaseImage to the ID of a custom image.
     *   If you set `BaseImageType` to IMAGE_FAMILY, set BaseImage to the name of an image family.
     *   If you set `BaseImageType` to OSS, you do not need to specify BaseImage.
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
     *   OSS: Object Storage Service (OSS) object
     *
     * This parameter is required.
     *
     * @example IMAGE
     *
     * @var string
     */
    public $baseImageType;

    /**
     * @description The build content in the image template. The content cannot exceed 16 KB in size. For information about the commands supported by Image Builder, see [Commands supported by Image Builder](https://help.aliyun.com/document_detail/200206.html).
     *
     * @example FROM IMAGE:m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $buildContent;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.**** For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to release the intermediate instance when the image cannot be created. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     *
     * > If the intermediate instance cannot be started, the instance is released by default.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteInstanceOnFailure;

    /**
     * @description The description of the image template. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The family of the image created based on the image template.
     *
     * >  This parameter is no longer used. We recommend that you use ImageOptions.ImageFamily.
     *
     * @example null
     *
     * @deprecated
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The name prefix of the image created based on the image template.
     *
     * >  This parameter is no longer used. We recommend that you use ImageOptions.ImageName.
     *
     * @example testImageName
     *
     * @deprecated
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The attributes of the image created based on the image template.
     *
     * @var imageOptions
     */
    public $imageOptions;

    /**
     * @description The attributes and settings of the image that you want to import. If you set `BaseImageType` to OSS, you must specify this parameter.
     *
     * @var importImageOptions
     */
    public $importImageOptions;

    /**
     * @description The instance type. You can call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) to query instance types.
     *
     * If you do not configure this parameter, an instance type that provides the fewest vCPUs and memory resources is automatically selected. This configuration is subject to resource availability of instance types. For example, the ecs.g6.large instance type is automatically selected. If available ecs.g6.large resources are insufficient, the ecs.g6.xlarge instance type is selected.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The size of the outbound public bandwidth for the intermediate instance. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the launch template. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * >  If you do not specify `Name`, the return value of `ImagePipelineId` is used.
     *
     * @example testImagePipeline
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether the image created based on the image template supports the NVMe protocol.
     *
     * >  This parameter is no longer used. We recommend that you use ImageOptions.ImageFeatures.NvmeSupport.
     *
     * @example auto
     *
     * @deprecated
     *
     * @var string
     */
    public $nvmeSupport;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The repair mode of the image template.
     *
     * Valid values:
     *
     *   Standard: the standard mode.
     *
     * Supported check items in Linux operating systems:
     *
     *   GUESTOS.CloudInit
     *   GUESTOS.Dhcp
     *   GUESTOS.Virtio
     *   GUESTOS.OnlineResizeFS
     *   GUESTOS.Grub
     *   GUESTOS.Fstab
     *
     * Supported check items in Windows operating systems:
     *
     *   GUESTOS.Virtio
     *   GUESTOS.Update
     *   GUESTOS.Hotfix
     *   GUESTOS.Server
     *
     * >  As the check and repair capabilities continue to improve, the number of check items may increase. For more information about check items, see [Overview of image check](https://help.aliyun.com/document_detail/439819.html).
     *
     * @example null
     *
     * @var string
     */
    public $repairMode;

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
     * @description The system disk size of the intermediate instance. Unit: GiB. Valid values: 20 to 500.
     *
     * Default value: 40.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags to add to the template.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The test content in the image template. The content cannot exceed 16 KB in size. For information about the commands supported by Image Builder, see [Commands supported by Image Builder](https://help.aliyun.com/document_detail/200206.html).
     *
     * @example null
     *
     * @var string
     */
    public $testContent;

    /**
     * @description The IDs of regions to which you want to distribute the image that is created based on the image template. You can specify up to 20 region IDs.
     *
     * If you do not specify this parameter, the image is created only in the current region.
     *
     * @example cn-hangzhou
     *
     * @var string[]
     */
    public $toRegionId;

    /**
     * @description The ID of the vSwitch.
     *
     * If you do not specify this parameter, a new VPC and vSwitch are created. Make sure that the VPC quota in your account is sufficient. For more information, see [Limits and quotas](https://help.aliyun.com/document_detail/27750.html).
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'addAccount' => 'AddAccount',
        'advancedOptions' => 'AdvancedOptions',
        'baseImage' => 'BaseImage',
        'baseImageType' => 'BaseImageType',
        'buildContent' => 'BuildContent',
        'clientToken' => 'ClientToken',
        'deleteInstanceOnFailure' => 'DeleteInstanceOnFailure',
        'description' => 'Description',
        'imageFamily' => 'ImageFamily',
        'imageName' => 'ImageName',
        'imageOptions' => 'ImageOptions',
        'importImageOptions' => 'ImportImageOptions',
        'instanceType' => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name' => 'Name',
        'nvmeSupport' => 'NvmeSupport',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'repairMode' => 'RepairMode',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'systemDiskSize' => 'SystemDiskSize',
        'tag' => 'Tag',
        'testContent' => 'TestContent',
        'toRegionId' => 'ToRegionId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toMap() : null;
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
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toMap() : null;
        }
        if (null !== $this->importImageOptions) {
            $res['ImportImageOptions'] = null !== $this->importImageOptions ? $this->importImageOptions->toMap() : null;
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
        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
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
        if (null !== $this->repairMode) {
            $res['RepairMode'] = $this->repairMode;
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
        if (null !== $this->testContent) {
            $res['TestContent'] = $this->testContent;
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
        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptions = advancedOptions::fromMap($map['AdvancedOptions']);
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
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
        }
        if (isset($map['ImportImageOptions'])) {
            $model->importImageOptions = importImageOptions::fromMap($map['ImportImageOptions']);
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
        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
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
        if (isset($map['RepairMode'])) {
            $model->repairMode = $map['RepairMode'];
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
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TestContent'])) {
            $model->testContent = $map['TestContent'];
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
