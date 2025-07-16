<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody\dentry\properties;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody\dentry\thumbnail;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DentryAppPropertiesValue;
use AlibabaCloud\Tea\Model;

class dentry extends Model
{
    /**
     * @var DentryAppPropertiesValue[][]
     */
    public $appProperties;

    /**
     * @example DOCUMENT
     *
     * @var string
     */
    public $category;

    /**
     * @example 2022-01-01T10:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example creator_id
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example txt
     *
     * @var string
     */
    public $extension;

    /**
     * @example dentry_id
     *
     * @var string
     */
    public $id;

    /**
     * @example 2022-01-01T10:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example modifier_id
     *
     * @var string
     */
    public $modifierId;

    /**
     * @example dentry_name
     *
     * @var string
     */
    public $name;

    /**
     * @example parent_id
     *
     * @var string
     */
    public $parentId;

    /**
     * @example PUBLIC_OSS_PARTITION
     *
     * @var string
     */
    public $partitionType;

    /**
     * @example dentry_path
     *
     * @var string
     */
    public $path;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @example 512
     *
     * @var int
     */
    public $size;

    /**
     * @example space_id
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example DINGTALK
     *
     * @var string
     */
    public $storageDriver;

    /**
     * @var thumbnail
     */
    public $thumbnail;

    /**
     * @example FILE
     *
     * @var string
     */
    public $type;

    /**
     * @example uuid
     *
     * @var string
     */
    public $uuid;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appProperties) {
            $res['AppProperties'] = $this->appProperties;
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
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
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
            $res['Thumbnail'] = null !== $this->thumbnail ? $this->thumbnail->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return dentry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppProperties'])) {
            $model->appProperties = $map['AppProperties'];
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
