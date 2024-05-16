<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionApplyOrdersRequest extends Model
{
    /**
     * @description The end time. You can query all permission request orders that have been submitted before the time. The parameter value is a UNIX timestamp. If you do not specify the parameter, all permission request orders that are submitted before the current time are queried.
     *
     * @example 1617200471885
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the compute engine with which the permission request order is associated. The parameter value is odps and cannot be changed. This value indicates that you can request permissions only on fields of tables in MaxCompute compute engine instances.
     *
     * This parameter is required.
     * @example odps
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The status of the permission request order. Valid values:
     *
     *   1: pending approval
     *   2: approved and authorized
     *   3: approved but authorization failed
     *   4: rejected
     *
     * @example 1
     *
     * @var int
     */
    public $flowStatus;

    /**
     * @description The name of the MaxCompute project to which the permission request order belongs. If you do not specify the parameter, the permission request orders of all MaxCompute projects are returned.
     *
     * @example aMaxComputeProject
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @description The type of the permission request order. The parameter value is 1 and cannot be changed. This value indicates ACL-based authorization.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query type of the permission request order. Valid values:
     *
     *   0: The permission request orders you submitted.
     *   1: The permission request orders you approved.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $queryType;

    /**
     * @description The start time. You can query all permission request orders that have been submitted after the time. The parameter value is a UNIX timestamp. If you do not specify the parameter, all permission request orders are queried.
     *
     * @example 1616200471885
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The name of the table with which the permission request order is associated. If you do not specify the parameter, the permission request orders of all tables are returned.
     *
     * @example aTableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the DataWorks workspace to which the permission request order belongs. If you do not specify the parameter, the permission request orders of all workspaces are returned. You can log on to the DataWorks console and go to the Workspace Management page to obtain the ID.
     *
     * @example 12345
     *
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'endTime'               => 'EndTime',
        'engineType'            => 'EngineType',
        'flowStatus'            => 'FlowStatus',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'orderType'             => 'OrderType',
        'pageNum'               => 'PageNum',
        'pageSize'              => 'PageSize',
        'queryType'             => 'QueryType',
        'startTime'             => 'StartTime',
        'tableName'             => 'TableName',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionApplyOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
