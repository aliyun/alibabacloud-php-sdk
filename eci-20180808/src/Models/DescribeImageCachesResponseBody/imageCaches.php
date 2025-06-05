<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches\tags;

class imageCaches extends Model
{
    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $eliminationStrategy;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $expireDateTime;

    /**
     * @var string
     */
    public $flashSnapshotId;

    /**
     * @var string
     */
    public $imageCacheId;

    /**
     * @var string
     */
    public $imageCacheName;

    /**
     * @var int
     */
    public $imageCacheSize;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $lastMatchedTime;

    /**
     * @var string
     */
    public $progress;

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
    public $snapshotId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'creationTime' => 'CreationTime',
        'eliminationStrategy' => 'EliminationStrategy',
        'events' => 'Events',
        'expireDateTime' => 'ExpireDateTime',
        'flashSnapshotId' => 'FlashSnapshotId',
        'imageCacheId' => 'ImageCacheId',
        'imageCacheName' => 'ImageCacheName',
        'imageCacheSize' => 'ImageCacheSize',
        'images' => 'Images',
        'lastMatchedTime' => 'LastMatchedTime',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'snapshotId' => 'SnapshotId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1++] = events::fromMap($item1);
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
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
