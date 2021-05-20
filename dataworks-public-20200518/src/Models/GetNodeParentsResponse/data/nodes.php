<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponse\data;

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
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $baselineId;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'nodeName'      => 'NodeName',
        'cronExpress'   => 'CronExpress',
        'schedulerType' => 'SchedulerType',
        'programType'   => 'ProgramType',
        'ownerId'       => 'OwnerId',
        'projectId'     => 'ProjectId',
        'repeatability' => 'Repeatability',
        'priority'      => 'Priority',
        'baselineId'    => 'BaselineId',
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
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('baselineId', $this->baselineId, true);
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        return $model;
    }
}
