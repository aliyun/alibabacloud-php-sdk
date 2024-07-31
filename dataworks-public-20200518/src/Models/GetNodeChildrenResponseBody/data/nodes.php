<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeChildrenResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example 12345656
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The CRON expression. CRON expressions are used to run auto triggered nodes.
     *
     * @example 00 00 * * * *
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The node ID.
     *
     * @example 1244564565
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example test_Node
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Alibaba Cloud account used by the node owner.
     *
     * @example 123124561341251321
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The priority. Valid values: 1 to 8. A large value indicates a high priority.
     *
     * @example 3
     *
     * @var int
     */
    public $priority;

    /**
     * @description The type of the node.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The ID of the workspace to which the node belongs.
     *
     * @example 12315412412
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Indicates whether the node can be rerun if the node fails to run. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $repeatability;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: The node is an auto triggered node.
     *   MANUAL: The node is a manually triggered node. Manually triggered nodes cannot be automatically triggered.
     *   PAUSE: The node is a paused node. Paused nodes are started as scheduled but the system sets the status of the nodes to failed when it starts to run them.
     *   SKIP: The node is a dry-run node. Dry-run nodes are started as scheduled but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $stepType;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'cronExpress'   => 'CronExpress',
        'nodeId'        => 'NodeId',
        'nodeName'      => 'NodeName',
        'ownerId'       => 'OwnerId',
        'priority'      => 'Priority',
        'programType'   => 'ProgramType',
        'projectId'     => 'ProjectId',
        'repeatability' => 'Repeatability',
        'schedulerType' => 'SchedulerType',
        'stepType'      => 'StepType',
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
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->stepType) {
            $res['StepType'] = $this->stepType;
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
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['StepType'])) {
            $model->stepType = $map['StepType'];
        }

        return $model;
    }
}
