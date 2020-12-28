<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image\tags;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

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
    public $isSupportIoOptimized;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var diskDeviceMappings[]
     */
    public $diskDeviceMappings;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $isSelfShared;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var bool
     */
    public $isSubscribed;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $architecture;
    protected $_name = [
        'imageFamily'          => 'ImageFamily',
        'status'               => 'Status',
        'creationTime'         => 'CreationTime',
        'progress'             => 'Progress',
        'isCopied'             => 'IsCopied',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'tags'                 => 'Tags',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'imageVersion'         => 'ImageVersion',
        'diskDeviceMappings'   => 'DiskDeviceMappings',
        'usage'                => 'Usage',
        'isSelfShared'         => 'IsSelfShared',
        'description'          => 'Description',
        'size'                 => 'Size',
        'platform'             => 'Platform',
        'imageName'            => 'ImageName',
        'OSName'               => 'OSName',
        'imageId'              => 'ImageId',
        'OSType'               => 'OSType',
        'isSubscribed'         => 'IsSubscribed',
        'productCode'          => 'ProductCode',
        'architecture'         => 'Architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = [];
            if (null !== $this->diskDeviceMappings && \is_array($this->diskDeviceMappings)) {
                $n = 0;
                foreach ($this->diskDeviceMappings as $item) {
                    $res['DiskDeviceMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->isSelfShared) {
            $res['IsSelfShared'] = $this->isSelfShared;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->isSubscribed) {
            $res['IsSubscribed'] = $this->isSubscribed;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
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
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['DiskDeviceMappings'])) {
            if (!empty($map['DiskDeviceMappings'])) {
                $model->diskDeviceMappings = [];
                $n                         = 0;
                foreach ($map['DiskDeviceMappings'] as $item) {
                    $model->diskDeviceMappings[$n++] = null !== $item ? diskDeviceMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['IsSelfShared'])) {
            $model->isSelfShared = $map['IsSelfShared'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['IsSubscribed'])) {
            $model->isSubscribed = $map['IsSubscribed'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        return $model;
    }
}
