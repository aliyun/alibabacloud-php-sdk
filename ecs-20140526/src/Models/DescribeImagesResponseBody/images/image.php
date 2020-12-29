<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\tags;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $isSupportIoOptimized;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $isSelfShared;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $OSNameEn;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isSubscribed;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var bool
     */
    public $isCopied;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'               => 'Status',
        'creationTime'         => 'CreationTime',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'tags'                 => 'Tags',
        'imageVersion'         => 'ImageVersion',
        'isSelfShared'         => 'IsSelfShared',
        'description'          => 'Description',
        'OSNameEn'             => 'OSNameEn',
        'platform'             => 'Platform',
        'OSName'               => 'OSName',
        'imageId'              => 'ImageId',
        'isSubscribed'         => 'IsSubscribed',
        'imageFamily'          => 'ImageFamily',
        'progress'             => 'Progress',
        'isCopied'             => 'IsCopied',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'diskDeviceMappings'   => 'DiskDeviceMappings',
        'usage'                => 'Usage',
        'size'                 => 'Size',
        'resourceGroupId'      => 'ResourceGroupId',
        'imageName'            => 'ImageName',
        'OSType'               => 'OSType',
        'architecture'         => 'Architecture',
        'productCode'          => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->isSelfShared) {
            $res['IsSelfShared'] = $this->isSelfShared;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->isSubscribed) {
            $res['IsSubscribed'] = $this->isSubscribed;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->isCopied) {
            $res['IsCopied'] = $this->isCopied;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['IsSelfShared'])) {
            $model->isSelfShared = $map['IsSelfShared'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['IsSubscribed'])) {
            $model->isSubscribed = $map['IsSubscribed'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['IsCopied'])) {
            $model->isCopied = $map['IsCopied'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }
        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
