<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
    /**
     * @example {"queue":"default","SPARK_CONF":"--conf spark.driver.memory=2g"}
     *
     * @var string
     */
    public $advancedSettings;

    /**
     * @example true
     *
     * @var bool
     */
    public $applyScheduleImmediately;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @example 120000
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @example 3
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @example odps_source
     *
     * @var string
     */
    public $connectionName;

    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $createFolderIfNotExists;

    /**
     * @example 00 05 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @example DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @example abc
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @example NONE
     *
     * @var string
     */
    public $dependentType;

    /**
     * @example 1671694850000
     *
     * @var int
     */
    public $endEffectDate;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @example Business_process/First_Business_Process/MaxCompute/Folder_1/Folder_2
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description This parameter is required.
     *
     * @example File name
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @example false
     *
     * @var bool
     */
    public $ignoreParentSkipRunningProperty;

    /**
     * @example m-bp1h4b5a8ogkbll2f3tr
     *
     * @var string
     */
    public $imageId;

    /**
     * @example project_root,project.file1,project.001_out
     *
     * @var string
     */
    public $inputList;

    /**
     * @example [{"ValueSource": "project_001.first_node:bizdate_param","ParameterName": "bizdate_input"}]
     *
     * @var string
     */
    public $inputParameters;

    /**
     * @example [{"Type": 1,"Value": "${bizdate}","ParameterName": "bizdate_param"}]
     *
     * @var string
     */
    public $outputParameters;

    /**
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @example a=x b=y
     *
     * @var string
     */
    public $paraValue;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example ALL_ALLOWED
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @example 375827434852437
     *
     * @var int
     */
    public $resourceGroupId;

    /**
     * @example S_res_group_559_1613715566828
     *
     * @var string
     */
    public $resourceGroupIdentifier;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @example 1671608450000
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @example true
     *
     * @var bool
     */
    public $startImmediately;

    /**
     * @example false
     *
     * @var bool
     */
    public $stop;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'advancedSettings' => 'AdvancedSettings',
        'applyScheduleImmediately' => 'ApplyScheduleImmediately',
        'autoParsing' => 'AutoParsing',
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes' => 'AutoRerunTimes',
        'connectionName' => 'ConnectionName',
        'content' => 'Content',
        'createFolderIfNotExists' => 'CreateFolderIfNotExists',
        'cronExpress' => 'CronExpress',
        'cycleType' => 'CycleType',
        'dependentNodeIdList' => 'DependentNodeIdList',
        'dependentType' => 'DependentType',
        'endEffectDate' => 'EndEffectDate',
        'fileDescription' => 'FileDescription',
        'fileFolderPath' => 'FileFolderPath',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'ignoreParentSkipRunningProperty' => 'IgnoreParentSkipRunningProperty',
        'imageId' => 'ImageId',
        'inputList' => 'InputList',
        'inputParameters' => 'InputParameters',
        'outputParameters' => 'OutputParameters',
        'owner' => 'Owner',
        'paraValue' => 'ParaValue',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'rerunMode' => 'RerunMode',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
        'schedulerType' => 'SchedulerType',
        'startEffectDate' => 'StartEffectDate',
        'startImmediately' => 'StartImmediately',
        'stop' => 'Stop',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            $res['AdvancedSettings'] = $this->advancedSettings;
        }
        if (null !== $this->applyScheduleImmediately) {
            $res['ApplyScheduleImmediately'] = $this->applyScheduleImmediately;
        }
        if (null !== $this->autoParsing) {
            $res['AutoParsing'] = $this->autoParsing;
        }
        if (null !== $this->autoRerunIntervalMillis) {
            $res['AutoRerunIntervalMillis'] = $this->autoRerunIntervalMillis;
        }
        if (null !== $this->autoRerunTimes) {
            $res['AutoRerunTimes'] = $this->autoRerunTimes;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createFolderIfNotExists) {
            $res['CreateFolderIfNotExists'] = $this->createFolderIfNotExists;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }
        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->ignoreParentSkipRunningProperty) {
            $res['IgnoreParentSkipRunningProperty'] = $this->ignoreParentSkipRunningProperty;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->outputParameters) {
            $res['OutputParameters'] = $this->outputParameters;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }
        if (null !== $this->startImmediately) {
            $res['StartImmediately'] = $this->startImmediately;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedSettings'])) {
            $model->advancedSettings = $map['AdvancedSettings'];
        }
        if (isset($map['ApplyScheduleImmediately'])) {
            $model->applyScheduleImmediately = $map['ApplyScheduleImmediately'];
        }
        if (isset($map['AutoParsing'])) {
            $model->autoParsing = $map['AutoParsing'];
        }
        if (isset($map['AutoRerunIntervalMillis'])) {
            $model->autoRerunIntervalMillis = $map['AutoRerunIntervalMillis'];
        }
        if (isset($map['AutoRerunTimes'])) {
            $model->autoRerunTimes = $map['AutoRerunTimes'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateFolderIfNotExists'])) {
            $model->createFolderIfNotExists = $map['CreateFolderIfNotExists'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }
        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }
        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['IgnoreParentSkipRunningProperty'])) {
            $model->ignoreParentSkipRunningProperty = $map['IgnoreParentSkipRunningProperty'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }
        if (isset($map['OutputParameters'])) {
            $model->outputParameters = $map['OutputParameters'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }
        if (isset($map['StartImmediately'])) {
            $model->startImmediately = $map['StartImmediately'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
