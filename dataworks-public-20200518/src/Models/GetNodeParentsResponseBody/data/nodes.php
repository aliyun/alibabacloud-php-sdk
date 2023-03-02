<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 1244564565
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The cron expression. Cron expressions are used to run auto triggered nodes.
     *
     * @example 00 00 * * * *
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The ID of the node.
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
     * @description The priority of the node. Valid values: 1 to 8. A large value indicates a high priority.
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
     *   true: indicates that the node can be rerun.
     *   false: indicates that the node cannot be rerun.
     *
     * @example true
     *
     * @var bool
     */
    public $repeatability;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: indicates that the node is an auto triggered node.
     *   MANUAL: indicates that the node is a manually triggered node.
     *   PAUSE: indicates that the node is a paused node. Paused nodes are started as scheduled but the system sets the status of the nodes to failed when it starts to run them.
     *   SKIP: indicates that the node is a dry-run node. Dry-run nodes are started as scheduled but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;
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

        return $model;
    }
}
