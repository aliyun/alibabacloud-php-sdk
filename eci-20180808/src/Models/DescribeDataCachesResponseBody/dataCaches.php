<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\dataSource;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches\tags;

class dataCaches extends Model
{
    /**
     * @var string
     */
    public $bucket;

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
    public $dataCacheId;

    /**
     * @var dataSource
     */
    public $dataSource;

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
    public $lastMatchedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

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
     * @var int
     */
    public $size;

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
        'bucket' => 'Bucket',
        'containerGroupId' => 'ContainerGroupId',
        'creationTime' => 'CreationTime',
        'dataCacheId' => 'DataCacheId',
        'dataSource' => 'DataSource',
        'events' => 'Events',
        'expireDateTime' => 'ExpireDateTime',
        'flashSnapshotId' => 'FlashSnapshotId',
        'lastMatchedTime' => 'LastMatchedTime',
        'name' => 'Name',
        'path' => 'Path',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
