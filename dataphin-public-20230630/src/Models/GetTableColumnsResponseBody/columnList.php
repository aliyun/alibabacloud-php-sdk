<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnsResponseBody;

use AlibabaCloud\Dara\Model;

class columnList extends Model
{
    /**
     * @var int
     */
    public $classifyId;

    /**
     * @var string
     */
    public $classifyName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var bool
     */
    public $isForeignKey;

    /**
     * @var bool
     */
    public $isPartitionColumn;

    /**
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @var string
     */
    public $lastModifier;

    /**
     * @var string
     */
    public $levelAbbreviation;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var int
     */
    public $seqNumber;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $visitCount30d;
    protected $_name = [
        'classifyId' => 'ClassifyId',
        'classifyName' => 'ClassifyName',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'dataType' => 'DataType',
        'defaultValue' => 'DefaultValue',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'guid' => 'Guid',
        'isForeignKey' => 'IsForeignKey',
        'isPartitionColumn' => 'IsPartitionColumn',
        'isPrimaryKey' => 'IsPrimaryKey',
        'lastModifier' => 'LastModifier',
        'levelAbbreviation' => 'LevelAbbreviation',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'nullable' => 'Nullable',
        'seqNumber' => 'SeqNumber',
        'tableGuid' => 'TableGuid',
        'tableName' => 'TableName',
        'visitCount30d' => 'VisitCount30d',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classifyId) {
            $res['ClassifyId'] = $this->classifyId;
        }

        if (null !== $this->classifyName) {
            $res['ClassifyName'] = $this->classifyName;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->isForeignKey) {
            $res['IsForeignKey'] = $this->isForeignKey;
        }

        if (null !== $this->isPartitionColumn) {
            $res['IsPartitionColumn'] = $this->isPartitionColumn;
        }

        if (null !== $this->isPrimaryKey) {
            $res['IsPrimaryKey'] = $this->isPrimaryKey;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }

        if (null !== $this->levelAbbreviation) {
            $res['LevelAbbreviation'] = $this->levelAbbreviation;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }

        if (null !== $this->seqNumber) {
            $res['SeqNumber'] = $this->seqNumber;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->visitCount30d) {
            $res['VisitCount30d'] = $this->visitCount30d;
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
        if (isset($map['ClassifyId'])) {
            $model->classifyId = $map['ClassifyId'];
        }

        if (isset($map['ClassifyName'])) {
            $model->classifyName = $map['ClassifyName'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['IsForeignKey'])) {
            $model->isForeignKey = $map['IsForeignKey'];
        }

        if (isset($map['IsPartitionColumn'])) {
            $model->isPartitionColumn = $map['IsPartitionColumn'];
        }

        if (isset($map['IsPrimaryKey'])) {
            $model->isPrimaryKey = $map['IsPrimaryKey'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }

        if (isset($map['LevelAbbreviation'])) {
            $model->levelAbbreviation = $map['LevelAbbreviation'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }

        if (isset($map['SeqNumber'])) {
            $model->seqNumber = $map['SeqNumber'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['VisitCount30d'])) {
            $model->visitCount30d = $map['VisitCount30d'];
        }

        return $model;
    }
}
