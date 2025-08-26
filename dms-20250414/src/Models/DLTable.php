<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DLTable extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $modifierId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var DLColumn[]
     */
    public $partitionKeys;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var DLStorageDescriptor
     */
    public $storageDescriptor;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var string
     */
    public $viewExpandedText;

    /**
     * @var string
     */
    public $viewOriginalText;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'dbId' => 'DbId',
        'dbName' => 'DbName',
        'description' => 'Description',
        'lastAccessTime' => 'LastAccessTime',
        'location' => 'Location',
        'modifierId' => 'ModifierId',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerType' => 'OwnerType',
        'parameters' => 'Parameters',
        'partitionKeys' => 'PartitionKeys',
        'retention' => 'Retention',
        'storageDescriptor' => 'StorageDescriptor',
        'tableType' => 'TableType',
        'viewExpandedText' => 'ViewExpandedText',
        'viewOriginalText' => 'ViewOriginalText',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->partitionKeys)) {
            Model::validateArray($this->partitionKeys);
        }
        if (null !== $this->storageDescriptor) {
            $this->storageDescriptor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partitionKeys) {
            if (\is_array($this->partitionKeys)) {
                $res['PartitionKeys'] = [];
                $n1 = 0;
                foreach ($this->partitionKeys as $item1) {
                    $res['PartitionKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->storageDescriptor) {
            $res['StorageDescriptor'] = null !== $this->storageDescriptor ? $this->storageDescriptor->toArray($noStream) : $this->storageDescriptor;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        if (null !== $this->viewExpandedText) {
            $res['ViewExpandedText'] = $this->viewExpandedText;
        }

        if (null !== $this->viewOriginalText) {
            $res['ViewOriginalText'] = $this->viewOriginalText;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['PartitionKeys'])) {
            if (!empty($map['PartitionKeys'])) {
                $model->partitionKeys = [];
                $n1 = 0;
                foreach ($map['PartitionKeys'] as $item1) {
                    $model->partitionKeys[$n1] = DLColumn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['StorageDescriptor'])) {
            $model->storageDescriptor = DLStorageDescriptor::fromMap($map['StorageDescriptor']);
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        if (isset($map['ViewExpandedText'])) {
            $model->viewExpandedText = $map['ViewExpandedText'];
        }

        if (isset($map['ViewOriginalText'])) {
            $model->viewOriginalText = $map['ViewOriginalText'];
        }

        return $model;
    }
}
