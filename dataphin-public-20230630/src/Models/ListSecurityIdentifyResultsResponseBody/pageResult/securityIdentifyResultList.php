<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyResultsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class securityIdentifyResultList extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $bizUnitDisplayName;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $classifyAbbreviation;

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
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var string
     */
    public $fieldDescription;

    /**
     * @var string
     */
    public $fieldId;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var bool
     */
    public $hasBetterRule;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $identifyRecordId;

    /**
     * @var bool
     */
    public $isCustomIdentify;

    /**
     * @var bool
     */
    public $isLocked;

    /**
     * @var string
     */
    public $levelAbbreviation;

    /**
     * @var int
     */
    public $levelColor;

    /**
     * @var int
     */
    public $levelIndex;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $projectDisplayName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $scanTaskId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tableCatalog;

    /**
     * @var string
     */
    public $tableDescription;

    /**
     * @var string
     */
    public $tableEnv;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $tableTaskId;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'bizDate' => 'BizDate',
        'bizUnitDisplayName' => 'BizUnitDisplayName',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'classifyAbbreviation' => 'ClassifyAbbreviation',
        'classifyId' => 'ClassifyId',
        'classifyName' => 'ClassifyName',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'fieldDescription' => 'FieldDescription',
        'fieldId' => 'FieldId',
        'fieldName' => 'FieldName',
        'hasBetterRule' => 'HasBetterRule',
        'id' => 'Id',
        'identifyRecordId' => 'IdentifyRecordId',
        'isCustomIdentify' => 'IsCustomIdentify',
        'isLocked' => 'IsLocked',
        'levelAbbreviation' => 'LevelAbbreviation',
        'levelColor' => 'LevelColor',
        'levelIndex' => 'LevelIndex',
        'levelName' => 'LevelName',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'projectDisplayName' => 'ProjectDisplayName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'scanTaskId' => 'ScanTaskId',
        'status' => 'Status',
        'tableCatalog' => 'TableCatalog',
        'tableDescription' => 'TableDescription',
        'tableEnv' => 'TableEnv',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tableTaskId' => 'TableTaskId',
        'tableType' => 'TableType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->bizUnitDisplayName) {
            $res['BizUnitDisplayName'] = $this->bizUnitDisplayName;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->classifyAbbreviation) {
            $res['ClassifyAbbreviation'] = $this->classifyAbbreviation;
        }

        if (null !== $this->classifyId) {
            $res['ClassifyId'] = $this->classifyId;
        }

        if (null !== $this->classifyName) {
            $res['ClassifyName'] = $this->classifyName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }

        if (null !== $this->fieldDescription) {
            $res['FieldDescription'] = $this->fieldDescription;
        }

        if (null !== $this->fieldId) {
            $res['FieldId'] = $this->fieldId;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->hasBetterRule) {
            $res['HasBetterRule'] = $this->hasBetterRule;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->identifyRecordId) {
            $res['IdentifyRecordId'] = $this->identifyRecordId;
        }

        if (null !== $this->isCustomIdentify) {
            $res['IsCustomIdentify'] = $this->isCustomIdentify;
        }

        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }

        if (null !== $this->levelAbbreviation) {
            $res['LevelAbbreviation'] = $this->levelAbbreviation;
        }

        if (null !== $this->levelColor) {
            $res['LevelColor'] = $this->levelColor;
        }

        if (null !== $this->levelIndex) {
            $res['LevelIndex'] = $this->levelIndex;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->projectDisplayName) {
            $res['ProjectDisplayName'] = $this->projectDisplayName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableCatalog) {
            $res['TableCatalog'] = $this->tableCatalog;
        }

        if (null !== $this->tableDescription) {
            $res['TableDescription'] = $this->tableDescription;
        }

        if (null !== $this->tableEnv) {
            $res['TableEnv'] = $this->tableEnv;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableTaskId) {
            $res['TableTaskId'] = $this->tableTaskId;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['BizUnitDisplayName'])) {
            $model->bizUnitDisplayName = $map['BizUnitDisplayName'];
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['ClassifyAbbreviation'])) {
            $model->classifyAbbreviation = $map['ClassifyAbbreviation'];
        }

        if (isset($map['ClassifyId'])) {
            $model->classifyId = $map['ClassifyId'];
        }

        if (isset($map['ClassifyName'])) {
            $model->classifyName = $map['ClassifyName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }

        if (isset($map['FieldDescription'])) {
            $model->fieldDescription = $map['FieldDescription'];
        }

        if (isset($map['FieldId'])) {
            $model->fieldId = $map['FieldId'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['HasBetterRule'])) {
            $model->hasBetterRule = $map['HasBetterRule'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdentifyRecordId'])) {
            $model->identifyRecordId = $map['IdentifyRecordId'];
        }

        if (isset($map['IsCustomIdentify'])) {
            $model->isCustomIdentify = $map['IsCustomIdentify'];
        }

        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }

        if (isset($map['LevelAbbreviation'])) {
            $model->levelAbbreviation = $map['LevelAbbreviation'];
        }

        if (isset($map['LevelColor'])) {
            $model->levelColor = $map['LevelColor'];
        }

        if (isset($map['LevelIndex'])) {
            $model->levelIndex = $map['LevelIndex'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ProjectDisplayName'])) {
            $model->projectDisplayName = $map['ProjectDisplayName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableCatalog'])) {
            $model->tableCatalog = $map['TableCatalog'];
        }

        if (isset($map['TableDescription'])) {
            $model->tableDescription = $map['TableDescription'];
        }

        if (isset($map['TableEnv'])) {
            $model->tableEnv = $map['TableEnv'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableTaskId'])) {
            $model->tableTaskId = $map['TableTaskId'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
