<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest\tag;

class DescribeImageCachesRequest extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageCacheId;

    /**
     * @var string
     */
    public $imageCacheName;

    /**
     * @var bool
     */
    public $imageFullMatch;

    /**
     * @var int
     */
    public $imageMatchCountRequest;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string[]
     */
    public $matchImage;

    /**
     * @var string
     */
    public $nextToken;

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
     * @var string
     */
    public $snapshotId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'image' => 'Image',
        'imageCacheId' => 'ImageCacheId',
        'imageCacheName' => 'ImageCacheName',
        'imageFullMatch' => 'ImageFullMatch',
        'imageMatchCountRequest' => 'ImageMatchCountRequest',
        'limit' => 'Limit',
        'matchImage' => 'MatchImage',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'snapshotId' => 'SnapshotId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->matchImage)) {
            Model::validateArray($this->matchImage);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imageCacheId) {
            $res['ImageCacheId'] = $this->imageCacheId;
        }

        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }

        if (null !== $this->imageFullMatch) {
            $res['ImageFullMatch'] = $this->imageFullMatch;
        }

        if (null !== $this->imageMatchCountRequest) {
            $res['ImageMatchCountRequest'] = $this->imageMatchCountRequest;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->matchImage) {
            if (\is_array($this->matchImage)) {
                $res['MatchImage'] = [];
                $n1 = 0;
                foreach ($this->matchImage as $item1) {
                    $res['MatchImage'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['ImageCacheId'])) {
            $model->imageCacheId = $map['ImageCacheId'];
        }

        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }

        if (isset($map['ImageFullMatch'])) {
            $model->imageFullMatch = $map['ImageFullMatch'];
        }

        if (isset($map['ImageMatchCountRequest'])) {
            $model->imageMatchCountRequest = $map['ImageMatchCountRequest'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['MatchImage'])) {
            if (!empty($map['MatchImage'])) {
                $model->matchImage = [];
                $n1 = 0;
                foreach ($map['MatchImage'] as $item1) {
                    $model->matchImage[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
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

        return $model;
    }
}
