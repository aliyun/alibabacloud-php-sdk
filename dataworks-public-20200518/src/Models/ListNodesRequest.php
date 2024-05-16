<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The error code returned.
     *
     * @example test_bizName
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The ID of the baseline with which the node is associated.
     *
     * @example liux_test_n****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The description of the node.
     *
     * @example 193379****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the workspace.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The operation that you want to perform. Set the value to **ListNodes**.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the owner.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'bizName'       => 'BizName',
        'nodeName'      => 'NodeName',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'programType'   => 'ProgramType',
        'projectEnv'    => 'ProjectEnv',
        'projectId'     => 'ProjectId',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
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
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
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
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
