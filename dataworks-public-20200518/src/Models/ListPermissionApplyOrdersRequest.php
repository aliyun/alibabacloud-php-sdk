<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListPermissionApplyOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $flowStatus;

    /**
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $queryType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'applyType' => 'ApplyType',
        'catalogName' => 'CatalogName',
        'endTime' => 'EndTime',
        'engineType' => 'EngineType',
        'flowStatus' => 'FlowStatus',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'orderType' => 'OrderType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'startTime' => 'StartTime',
        'tableName' => 'TableName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

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
