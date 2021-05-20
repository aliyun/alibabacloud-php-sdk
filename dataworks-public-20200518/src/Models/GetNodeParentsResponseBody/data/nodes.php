<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var bool
     */
    public $repeatability;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $programType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'schedulerType' => 'SchedulerType',
        'baselineId'    => 'BaselineId',
        'repeatability' => 'Repeatability',
        'nodeName'      => 'NodeName',
        'projectId'     => 'ProjectId',
        'programType'   => 'ProgramType',
        'priority'      => 'Priority',
        'ownerId'       => 'OwnerId',
        'cronExpress'   => 'CronExpress',
        'nodeId'        => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
