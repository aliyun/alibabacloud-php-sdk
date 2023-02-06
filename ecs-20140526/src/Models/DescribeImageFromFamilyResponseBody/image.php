<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image\tags;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The image architecture. Valid values:
     *
     *   i386
     *   x86\_64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The time when the image was created.
     *
     * @example 2018-01-10T01:01:10Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the image.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mappings between the disks and snapshots under the image.
     *
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @description The name of the image family.
     *
     * @example testImageFamily
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
     * @description The alias of the image owner. Valid values:
     *
     * - marketplace: Alibaba Cloud Marketplace images
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

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
     * @description Indicates whether the image has been shared to other Alibaba Cloud accounts.
     *
     * @example true
     *
     * @var string
     */
    public $isSelfShared;

    /**
     * @description Indicates whether you have subscribed to the image corresponding to the specified product code.
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
     * @description The name of the operating system.
     *
     * @example Alibaba Cloud Linux 2.1903
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The type of the operating system. Valid values:
     *
     * - linux
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The platform of the operating system.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $platform;

    /**
     * @description The product code of the Alibaba Cloud Marketplace image.
     *
     * @example jxsc00****
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The image creation progress. Unit: percent (%).
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the image. Valid values:
     *
     * - CreateFailed: The image failed to be created.
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description An array that consists of Tag data.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the image has been used to create ECS instances. Valid values:
     *
     * - none: The image has not been used to create ECS instances.
     * @example none
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'architecture'         => 'Architecture',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'diskDeviceMappings'   => 'DiskDeviceMappings',
        'imageFamily'          => 'ImageFamily',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'imageVersion'         => 'ImageVersion',
        'isCopied'             => 'IsCopied',
        'isSelfShared'         => 'IsSelfShared',
        'isSubscribed'         => 'IsSubscribed',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'OSName'               => 'OSName',
        'OSType'               => 'OSType',
        'platform'             => 'Platform',
        'productCode'          => 'ProductCode',
        'progress'             => 'Progress',
        'size'                 => 'Size',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'usage'                => 'Usage',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
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
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->isCopied) {
            $res['IsCopied'] = $this->isCopied;
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
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
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
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['IsCopied'])) {
            $model->isCopied = $map['IsCopied'];
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
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
