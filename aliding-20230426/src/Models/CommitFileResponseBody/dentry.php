<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody\dentry\properties;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody\dentry\thumbnail;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DentryAppPropertiesValue;

class dentry extends Model
{
    /**
     * @var DentryAppPropertiesValue[][]
     */
    public $appProperties;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageDriver;

    /**
     * @var thumbnail
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'appProperties' => 'AppProperties',
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
        'id' => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'modifierId' => 'ModifierId',
        'name' => 'Name',
        'parentId' => 'ParentId',
        'partitionType' => 'PartitionType',
        'path' => 'Path',
        'properties' => 'Properties',
        'size' => 'Size',
        'spaceId' => 'SpaceId',
        'status' => 'Status',
        'storageDriver' => 'StorageDriver',
        'thumbnail' => 'Thumbnail',
        'type' => 'Type',
        'uuid' => 'Uuid',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->appProperties)) {
            Model::validateArray($this->appProperties);
        }
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (null !== $this->thumbnail) {
            $this->thumbnail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appProperties) {
            if (\is_array($this->appProperties)) {
                $res['AppProperties'] = [];
                foreach ($this->appProperties as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['AppProperties'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['AppProperties'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageDriver) {
            $res['StorageDriver'] = $this->storageDriver;
        }

        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = null !== $this->thumbnail ? $this->thumbnail->toArray($noStream) : $this->thumbnail;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppProperties'])) {
            if (!empty($map['AppProperties'])) {
                $model->appProperties = [];
                foreach ($map['AppProperties'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->appProperties[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->appProperties[$key1][$n2] = DentryAppPropertiesValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageDriver'])) {
            $model->storageDriver = $map['StorageDriver'];
        }

        if (isset($map['Thumbnail'])) {
            $model->thumbnail = thumbnail::fromMap($map['Thumbnail']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
