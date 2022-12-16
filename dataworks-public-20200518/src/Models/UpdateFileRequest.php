<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
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
     * @example odps_first
     *
     * @var string
     */
    public $connectionName;

    /**
     * @example SELECT "1";
     *
     * @var string
     */
    public $content;

    /**
     * @example 00 00-59/5 1-23 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @example NOT_DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @example 5,10,15,20
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @example USER_DEFINE
     *
     * @var string
     */
    public $dependentType;

    /**
     * @example 4155787800000
     *
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
     * @example 100000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @example ods_user_info_d
     *
     * @var string
     */
    public $fileName;

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
     * @example dw_project.ods_user_info_d
     *
     * @var string
     */
    public $outputList;

    /**
     * @example [{"Type": 1,"Value": "${bizdate}","ParameterName": "bizdate_param"}]
     *
     * @var string
     */
    public $outputParameters;

    /**
     * @example 18023848927592
     *
     * @var string
     */
    public $owner;

    /**
     * @example x=a y=b z=c
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
     * @example default_group
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
     * @example 936923400000
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
    protected $_name = [
        'advancedSettings'        => 'AdvancedSettings',
        'autoParsing'             => 'AutoParsing',
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes'          => 'AutoRerunTimes',
        'connectionName'          => 'ConnectionName',
        'content'                 => 'Content',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'dependentType'           => 'DependentType',
        'endEffectDate'           => 'EndEffectDate',
        'fileDescription'         => 'FileDescription',
        'fileFolderPath'          => 'FileFolderPath',
        'fileId'                  => 'FileId',
        'fileName'                => 'FileName',
        'inputList'               => 'InputList',
        'inputParameters'         => 'InputParameters',
        'outputList'              => 'OutputList',
        'outputParameters'        => 'OutputParameters',
        'owner'                   => 'Owner',
        'paraValue'               => 'ParaValue',
        'projectId'               => 'ProjectId',
        'projectIdentifier'       => 'ProjectIdentifier',
        'rerunMode'               => 'RerunMode',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
        'schedulerType'           => 'SchedulerType',
        'startEffectDate'         => 'StartEffectDate',
        'startImmediately'        => 'StartImmediately',
        'stop'                    => 'Stop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            $res['AdvancedSettings'] = $this->advancedSettings;
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
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = $this->outputList;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedSettings'])) {
            $model->advancedSettings = $map['AdvancedSettings'];
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }
        if (isset($map['OutputList'])) {
            $model->outputList = $map['OutputList'];
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

        return $model;
    }
}
