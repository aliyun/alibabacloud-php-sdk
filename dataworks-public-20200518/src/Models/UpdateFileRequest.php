<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
{
    /**
     * @description The advanced configurations of the node.
     *
     * This parameter is configured in the JSON format.
     * @example {"queue":"default","SPARK_CONF":"--conf spark.driver.memory=2g"}
     *
     * @var string
     */
    public $advancedSettings;

    /**
     * @description Specifies whether the automatic parsing feature is enabled for the file. Valid values:
     *
     *   true: The automatic parsing feature is enabled for the file.
     *   false: The automatic parsing feature is not enabled for the file.
     *
     * This parameter corresponds to the Analyze Code parameter that is displayed after Same Cycle is selected in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @description The interval between two consecutive automatic reruns after an error occurs. Unit: milliseconds. Maximum value: 1800000 (30 minutes).
     *
     * The interval that you specify in the DataWorks console is measured in minutes. Pay attention to the conversion between the units of time when you call the operation.
     * @example 120000
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @description The number of automatic reruns that are allowed after an error occurs.
     *
     * @example 3
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @description The name of the connected data source that is used to run the node. You can call the [ListDataSources](https://help.aliyun.com/document_detail/211431.html) operation to query the available data sources of the workspace.
     *
     * @example odps_first
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The code of the file. The code format varies based on the file type. To view the code format for a specific file type, go to Operation Center, right-click a node of the file type, and then select View Code.
     *
     * @example SELECT "1";
     *
     * @var string
     */
    public $content;

    /**
     * @description The CRON expression that represents the periodic scheduling policy of the node. This parameter corresponds to the Cron Expression parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console). After you configure the Scheduling Cycle and Run At parameters in the DataWorks console, DataWorks automatically generates a value for the Cron Expression parameter.
     *
     * Examples:
     *
     *   CRON expression for a node that is scheduled to run at 05:30 every day: `00 30 05 * * ?`
     *   CRON expression for a node that is scheduled to run at the fifteenth minute of each hour: `00 15 * * * ?`
     *   CRON expression for a node that is scheduled to run every 10 minutes: `00 00/10 * * * ?`
     *   CRON expression for a node that is scheduled to run every 10 minutes from 08:00 to 17:00 every day: `00 00-59/10 8-23 * * * ?`
     *   CRON expression for a node that is scheduled to run at 00:20 on the first day of each month: `00 20 00 1 * ?`
     *   CRON expression for a node that is scheduled to run every three months starting from 00:10 on January 1: `00 10 00 1 1-12/3 ?`
     *   CRON expression for a node that is scheduled to run at 00:05 every Tuesday and Friday: `00 05 00 * * 2,5`
     *
     * The scheduling system of DataWorks imposes the following limits on CRON expressions:
     *
     *   A node can be scheduled to run at a minimum interval of 5 minutes.
     *   A node can be scheduled to run at 00:05 every day at the earliest.
     *
     * @example 00 00-59/5 1-23 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The type of the scheduling cycle of the node that corresponds to the file. Valid values: NOT_DAY and DAY. The value NOT_DAY indicates that the node is scheduled to run by minute or hour. The value DAY indicates that the node is scheduled to run by day, week, or month.
     *
     * This parameter corresponds to the Scheduling Cycle parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example NOT_DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The ID of the node on which the node corresponding to the file depends when the DependentType parameter is set to USER_DEFINE. Multiple IDs are separated by commas (,).
     *
     * The value of this parameter corresponds to the ID of the node that you specified after you select Previous Cycle and set Depend On to Other Nodes in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 5,10,15,20
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description The type of the cross-cycle scheduling dependency of the node that corresponds to the file. Valid values:
     *
     *   SELF: The instance generated for the node in the current cycle depends on the instance generated for the node in the previous cycle.
     *   CHILD: The instance generated for the node in the current cycle depends on the instances generated for the descendant nodes at the nearest level of the node in the previous cycle.
     *   USER_DEFINE: The instance generated for the node in the current cycle depends on the instances generated for one or more specified nodes in the previous cycle.
     *   NONE: No cross-cycle scheduling dependency type is selected for the node.
     *
     * @example USER_DEFINE
     *
     * @var string
     */
    public $dependentType;

    /**
     * @description The end time of automatic scheduling. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the end time specified for the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 4155787800000
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
     * @description The ID of the file. You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 100000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file. You can set the FileName parameter to a new value to change the file name.
     *
     * You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to query the ID of the file whose name you want to change. Then, you can set the FileId parameter to the ID and set the FileName parameter to a new value when you call the [UpdateFile](https://help.aliyun.com/document_detail/173951.html) operation.
     * @example ods_user_info_d
     *
     * @var string
     */
    public $fileName;

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
     * @description The input parameters of the node. This parameter is configured in the JSON format. For more information about the input parameters, refer to the InputContextParameterList parameter in the Response parameters section of the [GetFile](https://help.aliyun.com/document_detail/173954.html) operation.
     *
     * This parameter corresponds to the Input Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example [{"ValueSource": "project_001.first_node:bizdate_param","ParameterName": "bizdate_input"}]
     *
     * @var string
     */
    public $inputParameters;

    /**
     * @description The output name of the current file.
     *
     * This parameter corresponds to the Output Name parameter in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example dw_project.ods_user_info_d
     *
     * @var string
     */
    public $outputList;

    /**
     * @description The output parameters of the node. This parameter is configured in the JSON format. For more information about the output parameters, refer to the OutputContextParameterList parameter in the Response parameters section of the [GetFile](https://help.aliyun.com/document_detail/173954.html) operation.
     *
     * This parameter corresponds to the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example [{"Type": 1,"Value": "${bizdate}","ParameterName": "bizdate_param"}]
     *
     * @var string
     */
    public $outputParameters;

    /**
     * @description The ID of the file owner.
     *
     * @example 18023848927592
     *
     * @var string
     */
    public $owner;

    /**
     * @description The scheduling parameters of the node.
     *
     * This parameter corresponds to the Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console). For more information, see [Configure scheduling parameters](https://help.aliyun.com/document_detail/137548.html).
     * @example x=a y=b z=c
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
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
     * @description The identifier of the resource group that is used to run the node. You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/173913.html) operation to query the available resource groups in the workspace.
     *
     * @example default_group
     *
     * @var string
     */
    public $resourceGroupIdentifier;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: The node is an auto triggered node.
     *   MANUAL: The node is a manually triggered node. Manually triggered nodes cannot be automatically triggered. They correspond to the nodes in the Manually Triggered Workflows pane.
     *   PAUSE: The node is a paused node.
     *   SKIP: The inner node is a dry-run node. Dry-run nodes are started as scheduled but the scheduling system sets the status of the nodes to succeeded when the scheduling system starts to run the nodes.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The start time of automatic scheduling. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 936923400000
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @description Specifies whether to immediately run a node after the node is deployed to the production environment. Valid values:
     *
     *   true: A node is immediately run after the node is deployed to the production environment.
     *   false: A node is not immediately run after the node is deployed to the production environment.
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
        'cronExpress'                     => 'CronExpress',
        'cycleType'                       => 'CycleType',
        'dependentNodeIdList'             => 'DependentNodeIdList',
        'dependentType'                   => 'DependentType',
        'endEffectDate'                   => 'EndEffectDate',
        'fileDescription'                 => 'FileDescription',
        'fileFolderPath'                  => 'FileFolderPath',
        'fileId'                          => 'FileId',
        'fileName'                        => 'FileName',
        'ignoreParentSkipRunningProperty' => 'IgnoreParentSkipRunningProperty',
        'inputList'                       => 'InputList',
        'inputParameters'                 => 'InputParameters',
        'outputList'                      => 'OutputList',
        'outputParameters'                => 'OutputParameters',
        'owner'                           => 'Owner',
        'paraValue'                       => 'ParaValue',
        'projectId'                       => 'ProjectId',
        'projectIdentifier'               => 'ProjectIdentifier',
        'rerunMode'                       => 'RerunMode',
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
        if (null !== $this->ignoreParentSkipRunningProperty) {
            $res['IgnoreParentSkipRunningProperty'] = $this->ignoreParentSkipRunningProperty;
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
        if (isset($map['IgnoreParentSkipRunningProperty'])) {
            $model->ignoreParentSkipRunningProperty = $map['IgnoreParentSkipRunningProperty'];
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
