<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionApplyOrdersRequest extends Model
{
    /**
     * @example 1617200471885
     *
     * @var int
     */
    public $endTime;

    /**
     * @example odps
     *
     * @var string
     */
    public $engineType;

    /**
     * @example 1
     *
     * @var int
     */
    public $flowStatus;

    /**
     * @example aMaxComputeProject
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $queryType;

    /**
     * @example 1616200471885
     *
     * @var int
     */
    public $startTime;

    /**
     * @example aTableName
     *
     * @var string
     */
    public $tableName;

    /**
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
