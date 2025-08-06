<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponseBody\storageSets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponseBody\storageSets\storageSet\tags;

class storageSet extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

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
    public $storageSetId;

    /**
     * @var string
     */
    public $storageSetName;

    /**
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'storageSetId' => 'StorageSetId',
        'storageSetName' => 'StorageSetName',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tags' => 'Tags',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }

        if (null !== $this->storageSetName) {
            $res['StorageSetName'] = $this->storageSetName;
        }

        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }

        if (isset($map['StorageSetName'])) {
            $model->storageSetName = $map['StorageSetName'];
        }

        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
