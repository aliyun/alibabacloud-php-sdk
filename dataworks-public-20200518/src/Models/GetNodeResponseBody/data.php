<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the node.
     *
     * @example 123456
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The operation that you want to perform. Set the value to **GetNode**.
     *
     * @example 123
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     * @example odps_first_dev
     *
     * @var string
     */
    public $connection;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     * @example 00 00 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @var int
     */
    public $deployDate;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the node. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the node ID.
     *
     * @example [{"projectName":"test_0923001","tableName":"test_table_001","partition":"ds\\u003d$[yyyymmdd]"},{"projectName":"test_0923001","tableName":"test_table_002","partition":"NOTAPARTITIONTABLE"}]
     *
     * @var string
     */
    public $dqcDescription;

    /**
     * @description The error message returned.
     *
     * @example 1
     *
     * @var int
     */
    public $dqcType;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var int
     */
    public $fileVersion;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @description The HTTP status code returned.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: The node is an auto triggered node.
     *   MANUAL: The node is a manually triggered node. Manually triggered nodes cannot be automatically triggered.
     *   PAUSE: The node is a paused node.
     *   SKIP: The node is a dry-run node. Dry-run nodes are started as scheduled but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @example The ID of the baseline.
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the node.
     *
     * @example 17366294****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The CRON expression returned.
     *
     * @example a=b
     *
     * @var string
     */
    public $paramValues;

    /**
     * @description The HTTP status code returned.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the owner of the node.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description Indicates whether the node can be rerun.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Indicates whether the node is associated with Data Quality. Valid values: 0 and 1. A value of 0 indicates that the node is associated with Data Quality. A value of 1 indicates that the node is not associated with Data Quality.
     *
     * @example 123
     *
     * @var int
     */
    public $relatedFlowId;

    /**
     * @description The ID of the workflow to which the node belongs.
     *
     * @example 60
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description The type of the node.
     *
     * @example true
     *
     * @var string
     */
    public $repeatability;

    /**
     * @var string
     */
    public $resGroupIdentifier;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example The table and partition filter expression in Data Quality that are associated with the node.
     *
     * @var string
     */
    public $resGroupName;

    /**
     * @description The ID of the workspace.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'baselineId'         => 'BaselineId',
        'businessId'         => 'BusinessId',
        'connection'         => 'Connection',
        'createTime'         => 'CreateTime',
        'cronExpress'        => 'CronExpress',
        'deployDate'         => 'DeployDate',
        'description'        => 'Description',
        'dqcDescription'     => 'DqcDescription',
        'dqcType'            => 'DqcType',
        'fileId'             => 'FileId',
        'fileType'           => 'FileType',
        'fileVersion'        => 'FileVersion',
        'modifyTime'         => 'ModifyTime',
        'nodeId'             => 'NodeId',
        'nodeName'           => 'NodeName',
        'ownerId'            => 'OwnerId',
        'paramValues'        => 'ParamValues',
        'priority'           => 'Priority',
        'programType'        => 'ProgramType',
        'projectId'          => 'ProjectId',
        'relatedFlowId'      => 'RelatedFlowId',
        'repeatInterval'     => 'RepeatInterval',
        'repeatability'      => 'Repeatability',
        'resGroupIdentifier' => 'ResGroupIdentifier',
        'resGroupName'       => 'ResGroupName',
        'schedulerType'      => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->deployDate) {
            $res['DeployDate'] = $this->deployDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dqcDescription) {
            $res['DqcDescription'] = $this->dqcDescription;
        }
        if (null !== $this->dqcType) {
            $res['DqcType'] = $this->dqcType;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->relatedFlowId) {
            $res['RelatedFlowId'] = $this->relatedFlowId;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->resGroupIdentifier) {
            $res['ResGroupIdentifier'] = $this->resGroupIdentifier;
        }
        if (null !== $this->resGroupName) {
            $res['ResGroupName'] = $this->resGroupName;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['DeployDate'])) {
            $model->deployDate = $map['DeployDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DqcDescription'])) {
            $model->dqcDescription = $map['DqcDescription'];
        }
        if (isset($map['DqcType'])) {
            $model->dqcType = $map['DqcType'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RelatedFlowId'])) {
            $model->relatedFlowId = $map['RelatedFlowId'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['ResGroupIdentifier'])) {
            $model->resGroupIdentifier = $map['ResGroupIdentifier'];
        }
        if (isset($map['ResGroupName'])) {
            $model->resGroupName = $map['ResGroupName'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
