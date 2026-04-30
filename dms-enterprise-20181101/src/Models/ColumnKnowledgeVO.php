<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ColumnKnowledgeVO extends Model
{
    /**
     * @var string
     */
    public $assetDescription;

    /**
     * @var string
     */
    public $assetModifiedGmt;

    /**
     * @var bool
     */
    public $autoIncrement;

    /**
     * @var int
     */
    public $columnId;

    /**
     * @var string
     */
    public $columnKeyType;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $hotLevel;

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
    public $nullable;

    /**
     * @var bool
     */
    public $plain;

    /**
     * @var int
     */
    public $position;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userSensitivityLevel;
    protected $_name = [
        'assetDescription' => 'AssetDescription',
        'assetModifiedGmt' => 'AssetModifiedGmt',
        'autoIncrement' => 'AutoIncrement',
        'columnId' => 'ColumnId',
        'columnKeyType' => 'ColumnKeyType',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'description' => 'Description',
        'hotLevel' => 'HotLevel',
        'level' => 'Level',
        'levelType' => 'LevelType',
        'nullable' => 'Nullable',
        'plain' => 'Plain',
        'position' => 'Position',
        'securityLevel' => 'SecurityLevel',
        'tableId' => 'TableId',
        'title' => 'Title',
        'userSensitivityLevel' => 'UserSensitivityLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }

        if (null !== $this->assetModifiedGmt) {
            $res['AssetModifiedGmt'] = $this->assetModifiedGmt;
        }

        if (null !== $this->autoIncrement) {
            $res['AutoIncrement'] = $this->autoIncrement;
        }

        if (null !== $this->columnId) {
            $res['ColumnId'] = $this->columnId;
        }

        if (null !== $this->columnKeyType) {
            $res['ColumnKeyType'] = $this->columnKeyType;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hotLevel) {
            $res['HotLevel'] = $this->hotLevel;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }

        if (null !== $this->plain) {
            $res['Plain'] = $this->plain;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userSensitivityLevel) {
            $res['UserSensitivityLevel'] = $this->userSensitivityLevel;
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
        if (isset($map['AssetDescription'])) {
            $model->assetDescription = $map['AssetDescription'];
        }

        if (isset($map['AssetModifiedGmt'])) {
            $model->assetModifiedGmt = $map['AssetModifiedGmt'];
        }

        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }

        if (isset($map['ColumnId'])) {
            $model->columnId = $map['ColumnId'];
        }

        if (isset($map['ColumnKeyType'])) {
            $model->columnKeyType = $map['ColumnKeyType'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HotLevel'])) {
            $model->hotLevel = $map['HotLevel'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }

        if (isset($map['Plain'])) {
            $model->plain = $map['Plain'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserSensitivityLevel'])) {
            $model->userSensitivityLevel = $map['UserSensitivityLevel'];
        }

        return $model;
    }
}
