<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\detectionOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\features;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\tags;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The architecture of the image. Valid values:
     *
     *   i386
     *   x86\_64
     *   arm64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The new boot mode of the image. Valid values:
     *
     *   BIOS
     *   UEFI
     *
     * > You need to be aware of the boot modes supported by the specified image. When you use this parameter to change the boot mode of the image, specify a boot mode supported by the image to ensure that instances that use this image can start as expected.
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The time when the image was created.
     *
     * @example 2019-11-15T06:07:05Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the image.
     *
     * @example Archive log for Oracle
     *
     * @var string
     */
    public $description;

    /**
     * @description Details about the check performed on the image.
     *
     * @var detectionOptions
     */
    public $detectionOptions;

    /**
     * @description The mappings between disks and snapshots that belong to the image.
     *
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @description The attributes of the image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The name of the image family.
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image.
     *
     * @example m-bp1g7004ksh0oeuc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: public images provided by Alibaba Cloud.
     *   self: your custom images.
     *   others: shared images from other Alibaba Cloud accounts or community images published by other Alibaba Cloud accounts.
     *   marketplace: Alibaba Cloud Marketplace images.
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The ID of the Alibaba Cloud account to which the image belongs. This parameter is valid only when you query shared images or community images.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $imageOwnerId;

    /**
     * @description The version of the image.
     *
     * @example 2
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description Indicates whether the image is a copy of another image.
     *
     * @example false
     *
     * @var bool
     */
    public $isCopied;

    /**
     * @description Indicates whether the image is publicly available. Publicly available images include public images provided by Alibaba Cloud and custom images published as community images. Valid values:
     *
     *   true: The image is publicly available.
     *   false: The image is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @description Indicates whether the custom image was shared to other Alibaba Cloud accounts.
     *
     * @example true
     *
     * @var string
     */
    public $isSelfShared;

    /**
     * @description Indicates whether you have subscribed to the image that corresponds to the specified product code.
     *
     * @example false
     *
     * @var bool
     */
    public $isSubscribed;

    /**
     * @description Indicates whether the image supports cloud-init.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @description Indicates whether the image can be used on I/O optimized instances.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportIoOptimized;

    /**
     * @description Indicates whether the image supports logons of non-root users. Valid values:
     *
     *   true: The image supports logons of non-root users.
     *   false: The image does not support logons of non-root users.
     *
     * @example false
     *
     * @var bool
     */
    public $loginAsNonRootSupported;

    /**
     * @description The display name of the operating system in Chinese.
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The display name of the operating system in English.
     *
     * @example Windows Server  2016 Data Center Edition 64bit Chinese Edition
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The OS type of the image. Valid values:
     *
     *   windows
     *   linux
     *
     * @example windows
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The operating system.
     *
     * @example Windows Server 2016
     *
     * @var string
     */
    public $platform;

    /**
     * @description The product code of the Alibaba Cloud Marketplace image.
     *
     * @example test000****
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The image creation progress. Unit: percent (%).
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The ID of the resource group to which the image belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 60
     *
     * @var int
     */
    public $size;

    /**
     * @description The state of the image. Valid values:
     *
     *   UnAvailable: The image is unavailable.
     *   Available: The image is available.
     *   Creating: The image is being created.
     *   CreateFailed: The image cannot be created.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the supplier that certified the community image.
     *
     * @example TestName
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The tags of the image.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the image has been used to create ECS instances. Valid values:
     *
     *   instance: The image has been used to create one or more ECS instances.
     *   none: The image has not been used to create ECS instances.
     *
     * @example none
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'architecture'            => 'Architecture',
        'bootMode'                => 'BootMode',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'detectionOptions'        => 'DetectionOptions',
        'diskDeviceMappings'      => 'DiskDeviceMappings',
        'features'                => 'Features',
        'imageFamily'             => 'ImageFamily',
        'imageId'                 => 'ImageId',
        'imageName'               => 'ImageName',
        'imageOwnerAlias'         => 'ImageOwnerAlias',
        'imageOwnerId'            => 'ImageOwnerId',
        'imageVersion'            => 'ImageVersion',
        'isCopied'                => 'IsCopied',
        'isPublic'                => 'IsPublic',
        'isSelfShared'            => 'IsSelfShared',
        'isSubscribed'            => 'IsSubscribed',
        'isSupportCloudinit'      => 'IsSupportCloudinit',
        'isSupportIoOptimized'    => 'IsSupportIoOptimized',
        'loginAsNonRootSupported' => 'LoginAsNonRootSupported',
        'OSName'                  => 'OSName',
        'OSNameEn'                => 'OSNameEn',
        'OSType'                  => 'OSType',
        'platform'                => 'Platform',
        'productCode'             => 'ProductCode',
        'progress'                => 'Progress',
        'resourceGroupId'         => 'ResourceGroupId',
        'size'                    => 'Size',
        'status'                  => 'Status',
        'supplierName'            => 'SupplierName',
        'tags'                    => 'Tags',
        'usage'                   => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detectionOptions) {
            $res['DetectionOptions'] = null !== $this->detectionOptions ? $this->detectionOptions->toMap() : null;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageOwnerId) {
            $res['ImageOwnerId'] = $this->imageOwnerId;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->isCopied) {
            $res['IsCopied'] = $this->isCopied;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->isSelfShared) {
            $res['IsSelfShared'] = $this->isSelfShared;
        }
        if (null !== $this->isSubscribed) {
            $res['IsSubscribed'] = $this->isSubscribed;
        }
        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }
        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }
        if (null !== $this->loginAsNonRootSupported) {
            $res['LoginAsNonRootSupported'] = $this->loginAsNonRootSupported;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetectionOptions'])) {
            $model->detectionOptions = detectionOptions::fromMap($map['DetectionOptions']);
        }
        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }
        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageOwnerId'])) {
            $model->imageOwnerId = $map['ImageOwnerId'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['IsCopied'])) {
            $model->isCopied = $map['IsCopied'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['IsSelfShared'])) {
            $model->isSelfShared = $map['IsSelfShared'];
        }
        if (isset($map['IsSubscribed'])) {
            $model->isSubscribed = $map['IsSubscribed'];
        }
        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }
        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }
        if (isset($map['LoginAsNonRootSupported'])) {
            $model->loginAsNonRootSupported = $map['LoginAsNonRootSupported'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
