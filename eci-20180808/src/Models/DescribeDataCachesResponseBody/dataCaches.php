<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\dataSource;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\tags;
use AlibabaCloud\Tea\Model;

class dataCaches extends Model
{
    /**
     * @description The bucket that stores the data cache.
     *
     * @example default
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The ID of the elastic container instance that was generated when the data cache was created.
     *
     * @example eci-8vb1y2w1dv7zeirn****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The time when the data cache was created.
     *
     * @example 2023-06-16T02:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The data cache ID.
     *
     * @example edc-bp15l4vvys94oo******
     *
     * @var string
     */
    public $dataCacheId;

    /**
     * @description The information about the data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The events.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The time when the data cache expires.
     *
     * @example 2023-06-26T02:43Z
     *
     * @var string
     */
    public $expireDateTime;

    /**
     * @description The ID of the local snapshot.
     *
     * @example s-bp12w3v37sit96t6****
     *
     * @var string
     */
    public $flashSnapshotId;

    /**
     * @description The time when the data cache was last matched.
     *
     * @example 2023-06-18T02:43Z
     *
     * @var string
     */
    public $lastMatchedTime;

    /**
     * @description The data cache name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The vHost directory in which the data cache resides.
     *
     * @example /data/models/
     *
     * @var string
     */
    public $path;

    /**
     * @description The creation progress of the data cache.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2hlt3ux4****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The size of the data cache. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The snapshot ID.
     *
     * @example s-2zec5oj8e1yhxijt****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The state of the data cache. Valid values:
     *
     *   Loading: The data cache is loading data.
     *   Creating: The data cache is being created.
     *   Available: The data cache is created.
     *   Failed: The data cache failed to be created.
     *   Updating: The data cache is being updated.
     *   UpdateFailed: The data cache failed to be updated.
     *
     * The data cache is available when it is in the Ready state.
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are attached to the data cache.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bucket'           => 'Bucket',
        'containerGroupId' => 'ContainerGroupId',
        'creationTime'     => 'CreationTime',
        'dataCacheId'      => 'DataCacheId',
        'dataSource'       => 'DataSource',
        'events'           => 'Events',
        'expireDateTime'   => 'ExpireDateTime',
        'flashSnapshotId'  => 'FlashSnapshotId',
        'lastMatchedTime'  => 'LastMatchedTime',
        'name'             => 'Name',
        'path'             => 'Path',
        'progress'         => 'Progress',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
        'size'             => 'Size',
        'snapshotId'       => 'SnapshotId',
        'status'           => 'Status',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataCacheId) {
            $res['DataCacheId'] = $this->dataCacheId;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
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
        if (null !== $this->lastMatchedTime) {
            $res['LastMatchedTime'] = $this->lastMatchedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
     * @return dataCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataCacheId'])) {
            $model->dataCacheId = $map['DataCacheId'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
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
        if (isset($map['LastMatchedTime'])) {
            $model->lastMatchedTime = $map['LastMatchedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
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
