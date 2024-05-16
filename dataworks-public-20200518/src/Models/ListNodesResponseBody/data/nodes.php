<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The number of the page to return. Minimum value: 1. Maximum value: 100.
     *
     * @example 123456
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The operation that you want to perform. Set the value to **ListNodes**.
     *
     * @example 123
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The name of the resource group.
     *
     * @example odps_first
     *
     * @var string
     */
    public $connection;

    /**
     * @description The name of the workflow.
     *
     * @example 00 00 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The priority for running the node. Valid values: 1, 3, 5, 7, and 8.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the owner.
     *
     * @example [{"projectName":"ztjy_dim","tableName":"dim_user_agent_manage_area_a","partition":"ds\\u003d$[yyyy-mm-dd-1]"}]
     *
     * @var string
     */
    public $dqcDescription;

    /**
     * @description The connection string.
     *
     * @example 1
     *
     * @var int
     */
    public $dqcType;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @description The types of the nodes. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the type of the node.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The total number of nodes returned.
     *
     * @example liux_test_n****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The additional parameters.
     *
     * @example 19337906836551
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The type of the node.
     *
     * @example a=b
     *
     * @var string
     */
    public $paramValues;

    /**
     * @description The ID of the owner.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The error message returned.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The information about the nodes.
     *
     * @example 33671
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The table and partition filter expression in Data Quality that are associated with the node.
     *
     * @example 1231123
     *
     * @var int
     */
    public $relatedFlowId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     * @example 60
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description The name of the node.
     *
     * @example true
     *
     * @var bool
     */
    public $repeatability;

    /**
     * @var string
     */
    public $resGroupIdentifier;

    /**
     * @description The ID of the workflow.
     *
     * @example The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @var string
     */
    public $resGroupName;

    /**
     * @description The types of the nodes. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the type of the node.
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
        'cronExpress'        => 'CronExpress',
        'description'        => 'Description',
        'dqcDescription'     => 'DqcDescription',
        'dqcType'            => 'DqcType',
        'fileType'           => 'FileType',
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
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
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
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
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
     * @return nodes
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
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
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
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
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
