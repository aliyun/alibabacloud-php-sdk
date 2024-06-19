<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeImageCachesRequest extends Model
{
    /**
     * @description The container images.
     *
     * @example nginx
     *
     * @var string
     */
    public $image;

    /**
     * @description The IDs of the image caches.
     *
     * @example imc-bp195erqe9o2pb09****
     *
     * @var string
     */
    public $imageCacheId;

    /**
     * @description The names of the image caches.
     *
     * @example testcache
     *
     * @var string
     */
    public $imageCacheName;

    /**
     * @description Specifies whether the image layers of the image caches must contain all image layers of the container image.\\
     * If you configure MatchImage, you can configure this parameter to further filter query results.
     * @example true
     *
     * @var bool
     */
    public $imageFullMatch;

    /**
     * @description The quantity of image caches whose image layers contain all image layers of the container image.\\
     * If you configure MatchImage, you can configure this parameter to further filter query results.
     * @example 3
     *
     * @var int
     */
    public $imageMatchCountRequest;

    /**
     * @description The maximum entries of query results that are allowed to be displayed.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The container images used to match the image caches that you want to query. You can specify a maximum of 100 container images.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl
     *
     * @var string[]
     */
    public $matchImage;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAdDWBF2****
     *
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
     * @description The region ID of the image caches.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the image caches belong.
     *
     * @example rg-2df3isufhi38****
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
     * @description The IDs of the snapshots that correspond to the image caches.
     *
     * @example s-2zec5oj8e1yhxijt****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The tags to add to the image caches.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'image'                  => 'Image',
        'imageCacheId'           => 'ImageCacheId',
        'imageCacheName'         => 'ImageCacheName',
        'imageFullMatch'         => 'ImageFullMatch',
        'imageMatchCountRequest' => 'ImageMatchCountRequest',
        'limit'                  => 'Limit',
        'matchImage'             => 'MatchImage',
        'nextToken'              => 'NextToken',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'snapshotId'             => 'SnapshotId',
        'tag'                    => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['MatchImage'] = $this->matchImage;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageCachesRequest
     */
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
                $model->matchImage = $map['MatchImage'];
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
