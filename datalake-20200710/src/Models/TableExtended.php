<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\privileges;
use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\sd;
use AlibabaCloud\Tea\Model;

class TableExtended extends Model
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
     * @var privileges
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
     * @var sd
     */
    public $sd;

    /**
     * @var string
     */
    public $tableFormat;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;

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
        'tableFormat'      => 'TableFormat',
        'tableName'        => 'TableName',
        'tableType'        => 'TableType',
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
        if (null !== $this->tableFormat) {
            $res['TableFormat'] = $this->tableFormat;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
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
     * @return TableExtended
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
            $model->privileges = privileges::fromMap($map['Privileges']);
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['RewriteEnabled'])) {
            $model->rewriteEnabled = $map['RewriteEnabled'];
        }
        if (isset($map['Sd'])) {
            $model->sd = sd::fromMap($map['Sd']);
        }
        if (isset($map['TableFormat'])) {
            $model->tableFormat = $map['TableFormat'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
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
