<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-02-02 00:00:00
     *
     * @var string
     */
    public $beginBizdate;

    /**
     * @description The name of the workflow. You can call the [ListBusiness](~~173945~~) operation to query the name of the workflow.
     *
     * @example test_bizName
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The data timestamp of the instances that you want to query. Specify the timestamp in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-02-02 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The ID of the directed acyclic graph (DAG). You can set this parameter to the value of the DagId parameter returned by the [RunCycleDagNodes](~~212961~~), [RunSmokeTest](~~212949~~), or [RunManualDagNodes](~~212830~~) operation based on your business requirements. The RunManualDagNodes operation is used to backfill data, the RunSmokeTest operation is used to perform smoke testing, and the RunManualDagNodes operation is used to run nodes in a manually triggered workflow.
     *
     * @example 11111
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-02-03 00:00:00
     *
     * @var string
     */
    public $endBizdate;

    /**
     * @description The ID of the node. You can call the [ListNodes](~~173979~~) operation to query the ID of the node.
     *
     * @example 100000000000
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node. You can call the [ListNodes](~~173979~~) operation to query the name of the node.
     *
     * @example openmr_8****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Alibaba Cloud account used by the workspace administrator. You can log on to the Alibaba Cloud Management Console and view the ID on the Security Settings page of the Account Center console.
     *
     * @example 193379****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of the page to return. Minimum value:1. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * You cannot specify the sorting method for the instances to be returned by this operation. By default, the instances are sorted in descending order of the time when the instances were created.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the node. You can call the [ListNodes](~~173979~~) operation to query the type of the node.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment. The value DEV indicates the development environment.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the workspace. You can call the [ListProjects](~~178393~~) operation to query the ID of the workspace.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the node. Valid values:
     *
     *   NOT_RUN: The node is not run.
     *   WAIT_TIME: The node is waiting for the scheduling time to arrive.
     *   WAIT_RESOURCE: The node is waiting for resources.
     *   RUNNING: The node is running.
     *   CHECKING: Data quality is being checked for the node.
     *   CHECKING_CONDITION: Branch conditions are being checked for the node.
     *   FAILURE: The node fails to run.
     *   SUCCESS: The node is successfully run.
     *
     * @example NOT_RUN
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'beginBizdate' => 'BeginBizdate',
        'bizName'      => 'BizName',
        'bizdate'      => 'Bizdate',
        'dagId'        => 'DagId',
        'endBizdate'   => 'EndBizdate',
        'nodeId'       => 'NodeId',
        'nodeName'     => 'NodeName',
        'owner'        => 'Owner',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'programType'  => 'ProgramType',
        'projectEnv'   => 'ProjectEnv',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginBizdate) {
            $res['BeginBizdate'] = $this->beginBizdate;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->endBizdate) {
            $res['EndBizdate'] = $this->endBizdate;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginBizdate'])) {
            $model->beginBizdate = $map['BeginBizdate'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['EndBizdate'])) {
            $model->endBizdate = $map['EndBizdate'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
