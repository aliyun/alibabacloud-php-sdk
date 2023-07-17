<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
    /**
     * @description The advanced configurations of the node.
     *
     * The value of this parameter must be in the JSON format.
     * @example {"queue":"default","SPARK_CONF":"--conf spark.driver.memory=2g"}
     *
     * @var string
     */
    public $advancedSettings;

    /**
     * @description Specifies whether to enable the automatic parsing feature for the file. Valid values:
     *
     *   true: enables the automatic parsing feature for the file.
     *   false: does not enable the automatic parsing feature for the file.
     *
     * This parameter corresponds to the Analyze Code parameter that is displayed after Same Cycle is selected in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @description The interval between automatic reruns after an error occurs. Unit: milliseconds. Maximum value: 1800000 (30 minutes).
     *
     * The interval that you specify in the DataWorks console is measured in minutes. Pay attention to the conversion between the units of time when you call the operation.
     * @example 120000
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @description The number of automatic reruns that are allowed after an error occurs. Maximum value: 10.
     *
     * @example 3
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @description The name of the data source for which the node is run.
     *
     * You can call the [UpdateDataSource](~~211432~~) operation to query the available data sources in the workspace.
     * @example odps_first
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The code for the file. The code format varies based on the file type. To view the code format for a specific file type, go to Operation Center, right-click a node of the file type, and then select View Code.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $createFolderIfNotExists;

    /**
     * @description The CRON expression that represents the automatic scheduling policy of the node. This parameter corresponds to the Cron Expression parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console). After you configure the Scheduling Cycle and Run At parameters in the DataWorks console, DataWorks generates the value of the Cron Expression parameter.
     *
     * Examples:
     *
     *   CRON expression for a node that is scheduled to run at 05:30 every day: `00 30 05 * * ?`
     *   CRON expression for a node that is scheduled to run at the fifteenth minute of each hour: `00 15 00-23/1 * * ?`
     *   CRON expression for a node that is scheduled to run every 10 minutes: `00 00/10 * * * ?`
     *   CRON expression for a node that is scheduled to run every 10 minutes from 08:00 to 17:00 every day: `00 00-59/10 8-17 * * * ?`
     *   CRON expression for a node that is scheduled to run at 00:20 on the first day of each month: `00 20 00 1 * ?`
     *   CRON expression for a node that is scheduled to run every three months starting from 00:10 on January 1: `00 10 00 1 1-12/3 ?`
     *   CRON expression for a node that is scheduled to run at 00:05 every Tuesday and Friday: `00 05 00 * * 2,5`
     *
     * The scheduling system of DataWorks imposes the following limits on CRON expressions:
     *
     *   A node can be scheduled to run at a minimum interval of 5 minutes.
     *   A node can be scheduled to run at 00:05 every day at the earliest.
     *
     * @example 00 05 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The type of the scheduling cycle. Valid values: NOT_DAY and DAY. The value NOT_DAY indicates that the node is scheduled to run by minute or hour. The value DAY indicates that the node is scheduled to run by day, week, or month.
     *
     * This parameter corresponds to the Scheduling Cycle parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The IDs of the nodes that generate instances in the previous cycle on which the current node depends.
     *
     * @example abc
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description The type of the cross-cycle scheduling dependency of the node. Valid values:
     *
     *   SELF: The instance generated for the node in the current cycle depends on the instance generated for the node in the previous cycle.
     *
     *   CHILD: The instance generated for the node in the current cycle depends on the instances generated for the descendant nodes at the nearest level of the node in the previous cycle.
     *
     *   USER_DEFINE: The instance generated for the node in the current cycle depends on the instances generated for one or more specified nodes in the previous cycle.
     *
     *   NONE: No cross-cycle scheduling dependency type is selected for the node.
     *
     *   USER_DEFINE_AND_SELF: The instance generated for the node in the current cycle depends on the instance generated for the node in the previous cycle and the instances generated for one or more specified nodes in the previous cycle.
     *
     *   CHILD_AND_SELF: The instance generated for the node in the current cycle depends on the instances generated for the descendant nodes at the nearest level of the node in the previous cycle and the instance generated for the node in the previous cycle.
     *
     * @example NONE
     *
     * @var string
     */
    public $dependentType;

    /**
     * @description The end time of automatic scheduling. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 1671694850000
     *
     * @var int
     */
    public $endEffectDate;

    /**
     * @description The description of the file.
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @description The path of the file.
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description The name of the file.
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the code in the file.
     *
     * You can call the [ListFileType](~~212428~~) operation to query the type of the code for the file.
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @var bool
     */
    public $ignoreParentSkipRunningProperty;

    /**
     * @description The output name of the parent file on which the current file depends. If you specify multiple output names, separate them with commas (,).
     *
     * This parameter corresponds to the Output Name parameter under Parent Nodes in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example project_root,project.file1,project.001_out
     *
     * @var string
     */
    public $inputList;

    /**
     * @description The input parameters of the node. The value of this parameter must be in the JSON format. For more information about the input parameters, see the InputContextParameterList parameter in the Response parameters section of the [GetFile](~~173954~~) operation.
     *
     * This parameter corresponds to the Input Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example [{"ValueSource": "project_001.first_node:bizdate_param","ParameterName": "bizdate_input"}]
     *
     * @var string
     */
    public $inputParameters;

    /**
     * @description The output parameters of the node. The value of this parameter must be in the JSON format. For more information about the output parameters, see the OutputContextParameterList parameter in the Response parameters section of the [GetFile](~~173954~~) operation.
     *
     * This parameter corresponds to the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example [{"Type": 1,"Value": "${bizdate}","ParameterName": "bizdate_param"}]
     *
     * @var string
     */
    public $outputParameters;

    /**
     * @description The ID of the Alibaba Cloud account used by the file owner. If this parameter is not configured, the ID of the Alibaba Cloud account of the user who calls the operation is used.
     *
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @description The scheduling parameters of the node. Separate multiple parameters with spaces.
     *
     * This parameter corresponds to the Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console). For more information about the configurations of the scheduling parameters, see [Configure scheduling parameters](~~137548~~).
     * @example a=x b=y
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * You must configure this parameter or the ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace name.
     *
     * You must configure this parameter or the ProjectId parameter to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description Specifies whether the node that corresponds to the file can be rerun. Valid values:
     *
     *   ALL_ALLOWED: The node can be rerun regardless of whether it is successfully run or fails to run.
     *   FAILURE_ALLOWED: The node can be rerun only after it fails to run.
     *   ALL_DENIED: The node cannot be rerun regardless of whether it is successfully run or fails to run.
     *
     * This parameter corresponds to the Rerun parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example ALL_ALLOWED
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description This parameter is deprecated. Do not use this parameter.
     *
     * You can call the [ListResourceGroups](~~173913~~) operation to query the available resource groups in the workspace. When you call the operation, set the ResourceGroupType parameter to 1. The response parameter Id indicates the ID of an available resource group.
     * @example 375827434852437
     *
     * @var int
     */
    public $resourceGroupId;

    /**
     * @description The identifier of the resource group that is used to run the node. You can call the [ListResourceGroups](~~173913~~) operation to query the available resource groups in the workspace.
     *
     * @example group_375827434852437
     *
     * @var string
     */
    public $resourceGroupIdentifier;

    /**
     * @description The scheduling type of the inner node. Valid values:
     *
     *   NORMAL: The node is an auto triggered node.
     *   MANUAL: The node is a manually triggered node. Manually triggered nodes cannot be automatically triggered. They correspond to the nodes in the Manually Triggered Workflows pane.
     *   PAUSE: The node is a paused node.
     *   SKIP: The node is a dry-run node. Dry-run nodes are started as scheduled, but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The start time of automatic scheduling. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 1671608450000
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @description Specifies whether to immediately run a node after the node is deployed to the production environment.
     *
     * This parameter is valid only for an EMR Spark Streaming node or an EMR Streaming SQL node. This parameter corresponds to the Start Method parameter in the Schedule section of the Configure tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example true
     *
     * @var bool
     */
    public $startImmediately;

    /**
     * @description Specifies whether to suspend the scheduling of the node. Valid values:
     *
     *   true: suspends the scheduling of the node.
     *   false: does not suspend the scheduling of the node.
     *
     * This parameter corresponds to the Recurrence parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example false
     *
     * @var bool
     */
    public $stop;
    protected $_name = [
        'advancedSettings'                => 'AdvancedSettings',
        'autoParsing'                     => 'AutoParsing',
        'autoRerunIntervalMillis'         => 'AutoRerunIntervalMillis',
        'autoRerunTimes'                  => 'AutoRerunTimes',
        'connectionName'                  => 'ConnectionName',
        'content'                         => 'Content',
        'createFolderIfNotExists'         => 'CreateFolderIfNotExists',
        'cronExpress'                     => 'CronExpress',
        'cycleType'                       => 'CycleType',
        'dependentNodeIdList'             => 'DependentNodeIdList',
        'dependentType'                   => 'DependentType',
        'endEffectDate'                   => 'EndEffectDate',
        'fileDescription'                 => 'FileDescription',
        'fileFolderPath'                  => 'FileFolderPath',
        'fileName'                        => 'FileName',
        'fileType'                        => 'FileType',
        'ignoreParentSkipRunningProperty' => 'IgnoreParentSkipRunningProperty',
        'inputList'                       => 'InputList',
        'inputParameters'                 => 'InputParameters',
        'outputParameters'                => 'OutputParameters',
        'owner'                           => 'Owner',
        'paraValue'                       => 'ParaValue',
        'projectId'                       => 'ProjectId',
        'projectIdentifier'               => 'ProjectIdentifier',
        'rerunMode'                       => 'RerunMode',
        'resourceGroupId'                 => 'ResourceGroupId',
        'resourceGroupIdentifier'         => 'ResourceGroupIdentifier',
        'schedulerType'                   => 'SchedulerType',
        'startEffectDate'                 => 'StartEffectDate',
        'startImmediately'                => 'StartImmediately',
        'stop'                            => 'Stop',
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

        return $model;
    }
}
