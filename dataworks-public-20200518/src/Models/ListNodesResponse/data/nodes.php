<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponse\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $programType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $repeatability;

    /**
     * @var string
     */
    public $paramValues;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resGroupName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var int
     */
    public $repeatInterval;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var int
     */
    public $dqcType;

    /**
     * @var string
     */
    public $dqcDescription;

    /**
     * @var int
     */
    public $relatedFlowId;

    /**
     * @var int
     */
    public $businessId;
    protected $_name = [
        'nodeId'         => 'NodeId',
        'nodeName'       => 'NodeName',
        'cronExpress'    => 'CronExpress',
        'schedulerType'  => 'SchedulerType',
        'programType'    => 'ProgramType',
        'ownerId'        => 'OwnerId',
        'projectId'      => 'ProjectId',
        'repeatability'  => 'Repeatability',
        'paramValues'    => 'ParamValues',
        'description'    => 'Description',
        'resGroupName'   => 'ResGroupName',
        'priority'       => 'Priority',
        'baselineId'     => 'BaselineId',
        'repeatInterval' => 'RepeatInterval',
        'connection'     => 'Connection',
        'dqcType'        => 'DqcType',
        'dqcDescription' => 'DqcDescription',
        'relatedFlowId'  => 'RelatedFlowId',
        'businessId'     => 'BusinessId',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('cronExpress', $this->cronExpress, true);
        Model::validateRequired('schedulerType', $this->schedulerType, true);
        Model::validateRequired('programType', $this->programType, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('repeatability', $this->repeatability, true);
        Model::validateRequired('paramValues', $this->paramValues, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('resGroupName', $this->resGroupName, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('repeatInterval', $this->repeatInterval, true);
        Model::validateRequired('connection', $this->connection, true);
        Model::validateRequired('dqcType', $this->dqcType, true);
        Model::validateRequired('dqcDescription', $this->dqcDescription, true);
        Model::validateRequired('relatedFlowId', $this->relatedFlowId, true);
        Model::validateRequired('businessId', $this->businessId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resGroupName) {
            $res['ResGroupName'] = $this->resGroupName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->dqcType) {
            $res['DqcType'] = $this->dqcType;
        }
        if (null !== $this->dqcDescription) {
            $res['DqcDescription'] = $this->dqcDescription;
        }
        if (null !== $this->relatedFlowId) {
            $res['RelatedFlowId'] = $this->relatedFlowId;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResGroupName'])) {
            $model->resGroupName = $map['ResGroupName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['DqcType'])) {
            $model->dqcType = $map['DqcType'];
        }
        if (isset($map['DqcDescription'])) {
            $model->dqcDescription = $map['DqcDescription'];
        }
        if (isset($map['RelatedFlowId'])) {
            $model->relatedFlowId = $map['RelatedFlowId'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        return $model;
    }
}
