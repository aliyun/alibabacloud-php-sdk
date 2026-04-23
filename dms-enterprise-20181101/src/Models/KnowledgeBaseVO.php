<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeBaseVO extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $confidence;

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
    public $entityId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $isDelete;

    /**
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $knowledgeType;

    /**
     * @var string
     */
    public $levelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oldDescription;

    /**
     * @var string
     */
    public $oldSummary;

    /**
     * @var string
     */
    public $parseDesc;

    /**
     * @var string
     */
    public $reasoningLogic;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $showType;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'category' => 'Category',
        'confidence' => 'Confidence',
        'dbId' => 'DbId',
        'dbName' => 'DbName',
        'description' => 'Description',
        'entityId' => 'EntityId',
        'env' => 'Env',
        'expr' => 'Expr',
        'gmtCreate' => 'GmtCreate',
        'instanceName' => 'InstanceName',
        'isDelete' => 'IsDelete',
        'knowledgeId' => 'KnowledgeId',
        'knowledgeType' => 'KnowledgeType',
        'levelType' => 'LevelType',
        'name' => 'Name',
        'oldDescription' => 'OldDescription',
        'oldSummary' => 'OldSummary',
        'parseDesc' => 'ParseDesc',
        'reasoningLogic' => 'ReasoningLogic',
        'relationType' => 'RelationType',
        'showType' => 'ShowType',
        'summary' => 'Summary',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
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

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }

        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->oldDescription) {
            $res['OldDescription'] = $this->oldDescription;
        }

        if (null !== $this->oldSummary) {
            $res['OldSummary'] = $this->oldSummary;
        }

        if (null !== $this->parseDesc) {
            $res['ParseDesc'] = $this->parseDesc;
        }

        if (null !== $this->reasoningLogic) {
            $res['ReasoningLogic'] = $this->reasoningLogic;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
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

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }

        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OldDescription'])) {
            $model->oldDescription = $map['OldDescription'];
        }

        if (isset($map['OldSummary'])) {
            $model->oldSummary = $map['OldSummary'];
        }

        if (isset($map['ParseDesc'])) {
            $model->parseDesc = $map['ParseDesc'];
        }

        if (isset($map['ReasoningLogic'])) {
            $model->reasoningLogic = $map['ReasoningLogic'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
