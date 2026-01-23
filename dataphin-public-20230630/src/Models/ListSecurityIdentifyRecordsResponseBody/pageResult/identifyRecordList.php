<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyRecordsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class identifyRecordList extends Model
{
    /**
     * @var float
     */
    public $actualIdentifyRate;

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
    public $classifyStatus;

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
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isBetterMatch;

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
    public $levelIndex;

    /**
     * @var string
     */
    public $levelName;

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
     * @var string
     */
    public $tableType;
    protected $_name = [
        'actualIdentifyRate' => 'ActualIdentifyRate',
        'bizDate' => 'BizDate',
        'bizUnitDisplayName' => 'BizUnitDisplayName',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'classifyAbbreviation' => 'ClassifyAbbreviation',
        'classifyId' => 'ClassifyId',
        'classifyName' => 'ClassifyName',
        'classifyStatus' => 'ClassifyStatus',
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'fieldDescription' => 'FieldDescription',
        'fieldId' => 'FieldId',
        'fieldName' => 'FieldName',
        'id' => 'Id',
        'isBetterMatch' => 'IsBetterMatch',
        'isCustomIdentify' => 'IsCustomIdentify',
        'isLocked' => 'IsLocked',
        'levelAbbreviation' => 'LevelAbbreviation',
        'levelIndex' => 'LevelIndex',
        'levelName' => 'LevelName',
        'projectDisplayName' => 'ProjectDisplayName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'tableDescription' => 'TableDescription',
        'tableEnv' => 'TableEnv',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tableType' => 'TableType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualIdentifyRate) {
            $res['ActualIdentifyRate'] = $this->actualIdentifyRate;
        }

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

        if (null !== $this->classifyStatus) {
            $res['ClassifyStatus'] = $this->classifyStatus;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isBetterMatch) {
            $res['IsBetterMatch'] = $this->isBetterMatch;
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

        if (null !== $this->levelIndex) {
            $res['LevelIndex'] = $this->levelIndex;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
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
        if (isset($map['ActualIdentifyRate'])) {
            $model->actualIdentifyRate = $map['ActualIdentifyRate'];
        }

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

        if (isset($map['ClassifyStatus'])) {
            $model->classifyStatus = $map['ClassifyStatus'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsBetterMatch'])) {
            $model->isBetterMatch = $map['IsBetterMatch'];
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

        if (isset($map['LevelIndex'])) {
            $model->levelIndex = $map['LevelIndex'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
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

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
