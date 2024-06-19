<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImageCacheRequest extends Model
{
    /**
     * @description Information about the Container Registry Enterprise Edition instance. For more information, see [Pull images from a Container Registry Enterprise Edition instance without using secrets](https://help.aliyun.com/document_detail/194250.html).
     *
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

    /**
     * @description Comments.
     *
     * @example hide
     *
     * @var string
     */
    public $annotations;

    /**
     * @description Specifies whether to enable reuse of image cache layers. If you enable this feature, and the image cache that you want to create and an existing image cache contain duplicate image layers, the system reuses the duplicate image layers to create the new image cache. This accelerates the creation of the image cache. Valid values:
     *
     *   true: enables reuse of image cache layers.
     *   false: disables reuse of image cache layers.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure the idempotence of a request](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-xxx-xxx-xxxx-42665544xxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the elastic IP address (EIP). If you want to pull images over the Internet, make sure that the elastic container instance can access the Internet. You can configure an EIP or a NAT gateway for the elastic container instance to access the Internet.
     *
     * @example eip-2zedsm5mfl3uhdj2d****
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description The elimination policy of the image cache. This parameter is empty by default, which indicates that the image cache is always retained.
     *
     * You can set this parameter to LRU, which indicates that the image cache can be automatically deleted. When the number of image caches reaches the quota, the system automatically deletes the image caches whose EliminationStrategy parameter is set to LRU and that are least commonly used.
     * @example LRU
     *
     * @var string
     */
    public $eliminationStrategy;

    /**
     * @description Specifies whether to enable the instant image cache feature. The feature can accelerate the creation of image caches. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $flash;

    /**
     * @description The number of temporary local snapshots. By default, the system creates one snapshot for each image cache. If an image cache is used to create multiple elastic container instances at a time, we recommend that you set this parameter to create multiple snapshots for the image cache. We recommend that you create one snapshot for creation of every 1,000 elastic container instances.
     *
     * >  If you set the Flash parameter to true, instant image cache is enabled. During the creation of the image cache, the system first creates a temporary local snapshot for you to instantly use the snapshot. After the temporary local snapshot is created, the system begins to create a regular snapshot. After the regular snapshot is created, the temporary local snapshot is automatically deleted.
     * @example 7
     *
     * @var int
     */
    public $flashCopyCount;

    /**
     * @description Container image N that is used to create the image cache.
     *
     * This parameter is required.
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl
     *
     * @var string[]
     */
    public $image;

    /**
     * @description The name of the image cache.
     *
     * This parameter is required.
     * @example testcache
     *
     * @var string
     */
    public $imageCacheName;

    /**
     * @description The size of the image cache. Unit: GiB. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $imageCacheSize;

    /**
     * @description The image repository.
     *
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @description The address of the self-managed image repository.
     *
     * When you create an image cache by using an image in a self-managed image repository that uses a self-signed certificate, you must specify this parameter to skip the certificate authentication. This can prevent the image from failing to pull due to certificate authentication failures.
     * @example "harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"
     *
     * @var string
     */
    public $insecureRegistry;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The address of the self-managed image repository. When you create an image cache by using an image in a self-managed image repository that uses the HTTP protocol, you must specify this parameter. This way, Elastic Container Instance uses the HTTP protocol instead of the default HTTPS protocol to pull the image. This can prevent the image from failing to pull due to different protocols.
     *
     * @example "harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"
     *
     * @var string
     */
    public $plainHttpRegistry;

    /**
     * @description The region ID of the image cache.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzh43v*****
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
     * @description The retention period of the image cache. Unit: days. When the retention period ends, the image cache expires and is deleted. By default, image caches never expire.
     *
     * >  The image caches that fail to be created are only retained for one day.
     * @example 7
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The ID of the security group.
     *
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The number of regular snapshots. By default, the system creates one snapshot for each image cache. If an image cache is used to create multiple elastic container instances at a time, we recommend that you set this parameter to create multiple snapshots for the image cache. We recommend that you create one snapshot for creation of every 1,000 elastic container instances.
     *
     * >  If you set the Flash parameter to false, instant image cache is disabled. In this case, only regular snapshots are generated during the creation of the image cache.
     * @example 7
     *
     * @var int
     */
    public $standardCopyCount;

    /**
     * @description The tag of the image cache.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch. You can specify up to 10 vSwitch IDs. Separate multiple vSwitch IDs with commas (,). Example: `vsw-***,vsw-***`.
     *
     * @example vsw-uf6h3rbwbm90urjwa****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the image cache.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acrRegistryInfo'         => 'AcrRegistryInfo',
        'annotations'             => 'Annotations',
        'autoMatchImageCache'     => 'AutoMatchImageCache',
        'clientToken'             => 'ClientToken',
        'eipInstanceId'           => 'EipInstanceId',
        'eliminationStrategy'     => 'EliminationStrategy',
        'flash'                   => 'Flash',
        'flashCopyCount'          => 'FlashCopyCount',
        'image'                   => 'Image',
        'imageCacheName'          => 'ImageCacheName',
        'imageCacheSize'          => 'ImageCacheSize',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'insecureRegistry'        => 'InsecureRegistry',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'plainHttpRegistry'       => 'PlainHttpRegistry',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'retentionDays'           => 'RetentionDays',
        'securityGroupId'         => 'SecurityGroupId',
        'standardCopyCount'       => 'StandardCopyCount',
        'tag'                     => 'Tag',
        'vSwitchId'               => 'VSwitchId',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = [];
            if (null !== $this->acrRegistryInfo && \is_array($this->acrRegistryInfo)) {
                $n = 0;
                foreach ($this->acrRegistryInfo as $item) {
                    $res['AcrRegistryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->autoMatchImageCache) {
            $res['AutoMatchImageCache'] = $this->autoMatchImageCache;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->eliminationStrategy) {
            $res['EliminationStrategy'] = $this->eliminationStrategy;
        }
        if (null !== $this->flash) {
            $res['Flash'] = $this->flash;
        }
        if (null !== $this->flashCopyCount) {
            $res['FlashCopyCount'] = $this->flashCopyCount;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }
        if (null !== $this->imageCacheSize) {
            $res['ImageCacheSize'] = $this->imageCacheSize;
        }
        if (null !== $this->imageRegistryCredential) {
            $res['ImageRegistryCredential'] = [];
            if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
                $n = 0;
                foreach ($this->imageRegistryCredential as $item) {
                    $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->insecureRegistry) {
            $res['InsecureRegistry'] = $this->insecureRegistry;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->plainHttpRegistry) {
            $res['PlainHttpRegistry'] = $this->plainHttpRegistry;
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
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->standardCopyCount) {
            $res['StandardCopyCount'] = $this->standardCopyCount;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n                      = 0;
                foreach ($map['AcrRegistryInfo'] as $item) {
                    $model->acrRegistryInfo[$n++] = null !== $item ? acrRegistryInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AutoMatchImageCache'])) {
            $model->autoMatchImageCache = $map['AutoMatchImageCache'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['EliminationStrategy'])) {
            $model->eliminationStrategy = $map['EliminationStrategy'];
        }
        if (isset($map['Flash'])) {
            $model->flash = $map['Flash'];
        }
        if (isset($map['FlashCopyCount'])) {
            $model->flashCopyCount = $map['FlashCopyCount'];
        }
        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = $map['Image'];
            }
        }
        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }
        if (isset($map['ImageCacheSize'])) {
            $model->imageCacheSize = $map['ImageCacheSize'];
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InsecureRegistry'])) {
            $model->insecureRegistry = $map['InsecureRegistry'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlainHttpRegistry'])) {
            $model->plainHttpRegistry = $map['PlainHttpRegistry'];
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
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['StandardCopyCount'])) {
            $model->standardCopyCount = $map['StandardCopyCount'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
