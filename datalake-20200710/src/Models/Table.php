<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Table extends Model
{
    /**
     * @var bool
     */
    public $cascade;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $lastAnalyzedTime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var FieldSchema[]
     */
    public $partitionKeys;

    /**
     * @var PrincipalPrivilegeSet
     */
    public $privileges;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var bool
     */
    public $rewriteEnabled;

    /**
     * @var StorageDescriptor
     */
    public $sd;

    /**
     * @example 59c6c8fefeaa46d8b599c1f790c59a19
     *
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var TableVersion
     */
    public $tableVersion;

    /**
     * @var bool
     */
    public $temporary;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $viewExpandedText;

    /**
     * @var string
     */
    public $viewOriginalText;
    protected $_name = [
        'cascade'          => 'Cascade',
        'createTime'       => 'CreateTime',
        'createdBy'        => 'CreatedBy',
        'databaseName'     => 'DatabaseName',
        'lastAccessTime'   => 'LastAccessTime',
        'lastAnalyzedTime' => 'LastAnalyzedTime',
        'owner'            => 'Owner',
        'ownerType'        => 'OwnerType',
        'parameters'       => 'Parameters',
        'partitionKeys'    => 'PartitionKeys',
        'privileges'       => 'Privileges',
        'retention'        => 'Retention',
        'rewriteEnabled'   => 'RewriteEnabled',
        'sd'               => 'Sd',
        'tableId'          => 'TableId',
        'tableName'        => 'TableName',
        'tableType'        => 'TableType',
        'tableVersion'     => 'TableVersion',
        'temporary'        => 'Temporary',
        'updateTime'       => 'UpdateTime',
        'viewExpandedText' => 'ViewExpandedText',
        'viewOriginalText' => 'ViewOriginalText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cascade) {
            $res['Cascade'] = $this->cascade;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastAnalyzedTime) {
            $res['LastAnalyzedTime'] = $this->lastAnalyzedTime;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = [];
            if (null !== $this->partitionKeys && \is_array($this->partitionKeys)) {
                $n = 0;
                foreach ($this->partitionKeys as $item) {
                    $res['PartitionKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = null !== $this->privileges ? $this->privileges->toMap() : null;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->rewriteEnabled) {
            $res['RewriteEnabled'] = $this->rewriteEnabled;
        }
        if (null !== $this->sd) {
            $res['Sd'] = null !== $this->sd ? $this->sd->toMap() : null;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->tableVersion) {
            $res['TableVersion'] = null !== $this->tableVersion ? $this->tableVersion->toMap() : null;
        }
        if (null !== $this->temporary) {
            $res['Temporary'] = $this->temporary;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->viewExpandedText) {
            $res['ViewExpandedText'] = $this->viewExpandedText;
        }
        if (null !== $this->viewOriginalText) {
            $res['ViewOriginalText'] = $this->viewOriginalText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cascade'])) {
            $model->cascade = $map['Cascade'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastAnalyzedTime'])) {
            $model->lastAnalyzedTime = $map['LastAnalyzedTime'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['PartitionKeys'])) {
            if (!empty($map['PartitionKeys'])) {
                $model->partitionKeys = [];
                $n                    = 0;
                foreach ($map['PartitionKeys'] as $item) {
                    $model->partitionKeys[$n++] = null !== $item ? FieldSchema::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Privileges'])) {
            $model->privileges = PrincipalPrivilegeSet::fromMap($map['Privileges']);
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['RewriteEnabled'])) {
            $model->rewriteEnabled = $map['RewriteEnabled'];
        }
        if (isset($map['Sd'])) {
            $model->sd = StorageDescriptor::fromMap($map['Sd']);
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['TableVersion'])) {
            $model->tableVersion = TableVersion::fromMap($map['TableVersion']);
        }
        if (isset($map['Temporary'])) {
            $model->temporary = $map['Temporary'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
