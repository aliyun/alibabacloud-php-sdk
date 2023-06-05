<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The parameters related to the node.
     *
     * @example 2020-02-02 00:00:00
     *
     * @var string
     */
    public $beginBizdate;

    /**
     * @description The ID of the instance.
     *
     * @example test_bizName
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 2020-02-02 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment. The value DEV indicates the development environment.
     *
     * @example 11111
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the workflow.
     *
     * @example 2020-02-03 00:00:00
     *
     * @var string
     */
    public $endBizdate;

    /**
     * @description Indicates whether the instance is associated with a monitoring rule in Data Quality. Valid values:
     *
     *   0: The instance is associated with a monitoring rule in Data Quality.
     *   1: The instance is not associated with a monitoring rule in Data Quality.
     *
     * @example 100000000000
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description Indicates whether the node can be rerun.
     *
     * @example openmr_8****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The connection string.
     *
     * @example 193379****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The operation that you want to perform.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the node.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The error code returned.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The time when the node was last modified.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the baseline.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The time when the instance started to wait to be scheduled.
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
