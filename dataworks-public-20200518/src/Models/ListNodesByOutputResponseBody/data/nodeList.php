<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodeList extends Model
{
    /**
     * @example 1235667
     *
     * @var int
     */
    public $baselineId;

    /**
     * @example odps_first
     *
     * @var string
     */
    public $connection;

    /**
     * @example 00 00 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example [{"projectName":"ztjy_dim","tableName":"dim_user_agent_manage_area_a","partition":"ds\u003d$[yyyy-mm-dd-1]"}]
     *
     * @var string
     */
    public $dqcDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $dqcType;

    /**
     * @example ODPS_SQL
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 125677
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example liux_test_n****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example 19337906836551
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example a=b
     *
     * @var string
     */
    public $paramValues;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @example 33671
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1235655464
     *
     * @var int
     */
    public $relatedFlowId;

    /**
     * @example 60
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @example true
     *
     * @var bool
     */
    public $repeatability;

    /**
     * @var string
     */
    public $resGroupName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'baselineId'     => 'BaselineId',
        'connection'     => 'Connection',
        'cronExpress'    => 'CronExpress',
        'description'    => 'Description',
        'dqcDescription' => 'DqcDescription',
        'dqcType'        => 'DqcType',
        'fileType'       => 'FileType',
        'nodeId'         => 'NodeId',
        'nodeName'       => 'NodeName',
        'ownerId'        => 'OwnerId',
        'paramValues'    => 'ParamValues',
        'priority'       => 'Priority',
        'programType'    => 'ProgramType',
        'projectId'      => 'ProjectId',
        'relatedFlowId'  => 'RelatedFlowId',
        'repeatInterval' => 'RepeatInterval',
        'repeatability'  => 'Repeatability',
        'resGroupName'   => 'ResGroupName',
        'schedulerType'  => 'SchedulerType',
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
     * @return nodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
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
        if (isset($map['ResGroupName'])) {
            $model->resGroupName = $map['ResGroupName'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
