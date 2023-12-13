<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches\tags;
use AlibabaCloud\Tea\Model;

class imageCaches extends Model
{
    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-bp18oq3m15prd9jb****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The time when the image cache was created.
     *
     * @example 2021-02-09T02:24:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The elimination policy of the image cache. This parameter is empty by default, which indicates that the image cache is always retained.
     *
     * You can set this parameter to LRU, which indicates that the image cache can be automatically deleted. When the number of image caches reaches the quota, the system automatically deletes the image caches whose EliminationStrategy parameter is set to LRU and that are least regularly used.
     * @example LRU
     *
     * @var string
     */
    public $eliminationStrategy;

    /**
     * @description The events of pulling an image to create the image cache.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The time when the image cache expires.
     *
     * @example 2019-11-10T09:00:48Z
     *
     * @var string
     */
    public $expireDateTime;

    /**
     * @description The ID of the local snapshot. A temporary local snapshot is created if the instant image cache feature is enabled.
     *
     * @example s-bp12w3v37sit96t6****
     *
     * @var string
     */
    public $flashSnapshotId;

    /**
     * @description The ID of the image cache.
     *
     * @example imc-bp195erqe9o2pb09****
     *
     * @var string
     */
    public $imageCacheId;

    /**
     * @description The name of the image cache.
     *
     * @example imagetest
     *
     * @var string
     */
    public $imageCacheName;

    /**
     * @description The size of the image cache. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $imageCacheSize;

    /**
     * @description The images contained in the image cache.
     *
     * @var string[]
     */
    public $images;

    /**
     * @description The time when the image cache was last matched.
     *
     * @example 2021-08-18T03:48:10Z
     *
     * @var string
     */
    public $lastMatchedTime;

    /**
     * @description The progress of creating the snapshot that is used to create the image cache.
     *
     * >  If the instant image cache feature is enabled, the system creates a temporary local snapshot and then a regular snapshot. In this case, this parameter indicates the progress of creating the regular snapshot.
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The region ID of the image cache.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the image cache belongs.
     *
     * @example rg-2df3isufhi38****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the snapshot that corresponds to the image cache.
     *
     * @example s-2zec5oj8e1yhxijt****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The status of the image cache. Valid values:
     *
     *   Preparing: The image cache is being prepared.
     *   Creating: The image is being created.
     *   Ready: The image cache is created.
     *   Failed: The image cache failed to be created.
     *   Updating: The image cache is being updated.
     *   UpdateFailed: The image cache failed to be updated.
     *
     * The image cache is ready for use when it is in the Ready state.
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the image cache.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'containerGroupId'    => 'ContainerGroupId',
        'creationTime'        => 'CreationTime',
        'eliminationStrategy' => 'EliminationStrategy',
        'events'              => 'Events',
        'expireDateTime'      => 'ExpireDateTime',
        'flashSnapshotId'     => 'FlashSnapshotId',
        'imageCacheId'        => 'ImageCacheId',
        'imageCacheName'      => 'ImageCacheName',
        'imageCacheSize'      => 'ImageCacheSize',
        'images'              => 'Images',
        'lastMatchedTime'     => 'LastMatchedTime',
        'progress'            => 'Progress',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'snapshotId'          => 'SnapshotId',
        'status'              => 'Status',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->eliminationStrategy) {
            $res['EliminationStrategy'] = $this->eliminationStrategy;
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireDateTime) {
            $res['ExpireDateTime'] = $this->expireDateTime;
        }
        if (null !== $this->flashSnapshotId) {
            $res['FlashSnapshotId'] = $this->flashSnapshotId;
        }
        if (null !== $this->imageCacheId) {
            $res['ImageCacheId'] = $this->imageCacheId;
        }
        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }
        if (null !== $this->imageCacheSize) {
            $res['ImageCacheSize'] = $this->imageCacheSize;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->lastMatchedTime) {
            $res['LastMatchedTime'] = $this->lastMatchedTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EliminationStrategy'])) {
            $model->eliminationStrategy = $map['EliminationStrategy'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireDateTime'])) {
            $model->expireDateTime = $map['ExpireDateTime'];
        }
        if (isset($map['FlashSnapshotId'])) {
            $model->flashSnapshotId = $map['FlashSnapshotId'];
        }
        if (isset($map['ImageCacheId'])) {
            $model->imageCacheId = $map['ImageCacheId'];
        }
        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }
        if (isset($map['ImageCacheSize'])) {
            $model->imageCacheSize = $map['ImageCacheSize'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = $map['Images'];
            }
        }
        if (isset($map['LastMatchedTime'])) {
            $model->lastMatchedTime = $map['LastMatchedTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
