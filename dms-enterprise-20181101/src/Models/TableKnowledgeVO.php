<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class TableKnowledgeVO extends Model
{
    /**
     * @var string
     */
    public $assetCreatedGmt;

    /**
     * @var string
     */
    public $assetDescription;

    /**
     * @var string
     */
    public $assetModifiedGmt;

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
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $hotLevel;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $levelType;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var int
     */
    public $numRows;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assetCreatedGmt' => 'AssetCreatedGmt',
        'assetDescription' => 'AssetDescription',
        'assetModifiedGmt' => 'AssetModifiedGmt',
        'dbId' => 'DbId',
        'dbName' => 'DbName',
        'dbType' => 'DbType',
        'description' => 'Description',
        'envType' => 'EnvType',
        'hotLevel' => 'HotLevel',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'level' => 'Level',
        'levelType' => 'LevelType',
        'logic' => 'Logic',
        'numRows' => 'NumRows',
        'schemaName' => 'SchemaName',
        'size' => 'Size',
        'summary' => 'Summary',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetCreatedGmt) {
            $res['AssetCreatedGmt'] = $this->assetCreatedGmt;
        }

        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }

        if (null !== $this->assetModifiedGmt) {
            $res['AssetModifiedGmt'] = $this->assetModifiedGmt;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->hotLevel) {
            $res['HotLevel'] = $this->hotLevel;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->numRows) {
            $res['NumRows'] = $this->numRows;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AssetCreatedGmt'])) {
            $model->assetCreatedGmt = $map['AssetCreatedGmt'];
        }

        if (isset($map['AssetDescription'])) {
            $model->assetDescription = $map['AssetDescription'];
        }

        if (isset($map['AssetModifiedGmt'])) {
            $model->assetModifiedGmt = $map['AssetModifiedGmt'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['HotLevel'])) {
            $model->hotLevel = $map['HotLevel'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['NumRows'])) {
            $model->numRows = $map['NumRows'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
