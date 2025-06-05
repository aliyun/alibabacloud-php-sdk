<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\tag;

class CreateImageCacheRequest extends Model
{
    /**
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

    /**
     * @var string
     */
    public $annotations;

    /**
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $eipInstanceId;

    /**
     * @var string
     */
    public $eliminationStrategy;

    /**
     * @var bool
     */
    public $flash;

    /**
     * @var int
     */
    public $flashCopyCount;

    /**
     * @var string[]
     */
    public $image;

    /**
     * @var string
     */
    public $imageCacheName;

    /**
     * @var int
     */
    public $imageCacheSize;

    /**
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @var string
     */
    public $insecureRegistry;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $plainHttpRegistry;

    /**
     * @var string
     */
    public $regionId;

    /**
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
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $standardCopyCount;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acrRegistryInfo' => 'AcrRegistryInfo',
        'annotations' => 'Annotations',
        'autoMatchImageCache' => 'AutoMatchImageCache',
        'clientToken' => 'ClientToken',
        'eipInstanceId' => 'EipInstanceId',
        'eliminationStrategy' => 'EliminationStrategy',
        'flash' => 'Flash',
        'flashCopyCount' => 'FlashCopyCount',
        'image' => 'Image',
        'imageCacheName' => 'ImageCacheName',
        'imageCacheSize' => 'ImageCacheSize',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'insecureRegistry' => 'InsecureRegistry',
        'osType' => 'OsType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plainHttpRegistry' => 'PlainHttpRegistry',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'retentionDays' => 'RetentionDays',
        'securityGroupId' => 'SecurityGroupId',
        'standardCopyCount' => 'StandardCopyCount',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->acrRegistryInfo)) {
            Model::validateArray($this->acrRegistryInfo);
        }
        if (\is_array($this->image)) {
            Model::validateArray($this->image);
        }
        if (\is_array($this->imageRegistryCredential)) {
            Model::validateArray($this->imageRegistryCredential);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrRegistryInfo) {
            if (\is_array($this->acrRegistryInfo)) {
                $res['AcrRegistryInfo'] = [];
                $n1 = 0;
                foreach ($this->acrRegistryInfo as $item1) {
                    $res['AcrRegistryInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->image)) {
                $res['Image'] = [];
                $n1 = 0;
                foreach ($this->image as $item1) {
                    $res['Image'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }

        if (null !== $this->imageCacheSize) {
            $res['ImageCacheSize'] = $this->imageCacheSize;
        }

        if (null !== $this->imageRegistryCredential) {
            if (\is_array($this->imageRegistryCredential)) {
                $res['ImageRegistryCredential'] = [];
                $n1 = 0;
                foreach ($this->imageRegistryCredential as $item1) {
                    $res['ImageRegistryCredential'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->insecureRegistry) {
            $res['InsecureRegistry'] = $this->insecureRegistry;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n1 = 0;
                foreach ($map['AcrRegistryInfo'] as $item1) {
                    $model->acrRegistryInfo[$n1++] = acrRegistryInfo::fromMap($item1);
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
                $model->image = [];
                $n1 = 0;
                foreach ($map['Image'] as $item1) {
                    $model->image[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['ImageRegistryCredential'] as $item1) {
                    $model->imageRegistryCredential[$n1++] = imageRegistryCredential::fromMap($item1);
                }
            }
        }

        if (isset($map['InsecureRegistry'])) {
            $model->insecureRegistry = $map['InsecureRegistry'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
