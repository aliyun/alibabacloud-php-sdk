<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateFileRequest extends Model
{
    /**
     * @var string
     */
    public $advancedSettings;

    /**
     * @var bool
     */
    public $applyScheduleImmediately;

    /**
     * @var bool
     */
    public $autoParsing;

    /**
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $createFolderIfNotExists;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @var string
     */
    public $dependentType;

    /**
     * @var int
     */
    public $endEffectDate;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $fileFolderPath;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var bool
     */
    public $ignoreParentSkipRunningProperty;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $inputList;

    /**
     * @var string
     */
    public $inputParameters;

    /**
     * @var string
     */
    public $outputParameters;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $paraValue;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var int
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupIdentifier;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var int
     */
    public $startEffectDate;

    /**
     * @var bool
     */
    public $startImmediately;

    /**
     * @var bool
     */
    public $stop;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
