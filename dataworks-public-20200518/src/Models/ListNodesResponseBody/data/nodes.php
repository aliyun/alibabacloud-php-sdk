<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponseBody\data;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $baselineId;
    /**
     * @var int
     */
    public $businessId;
    /**
     * @var string
     */
    public $connection;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $cronExpress;
    /**
     * @var int
     */
    public $deployDate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $dqcDescription;
    /**
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
    public $ownerId;
    /**
     * @var string
     */
    public $paramValues;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $programType;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var int
     */
    public $relatedFlowId;
    /**
     * @var int
     */
    public $repeatInterval;
    /**
     * @var int
     */
    public $repeatMode;
    /**
     * @var bool
     */
    public $repeatability;
    /**
     * @var string
     */
    public $resGroupIdentifier;
    /**
     * @var string
     */
    public $resGroupName;
    /**
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
        'repeatMode'         => 'RepeatMode',
        'repeatability'      => 'Repeatability',
        'resGroupIdentifier' => 'ResGroupIdentifier',
        'resGroupName'       => 'ResGroupName',
        'schedulerType'      => 'SchedulerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
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
