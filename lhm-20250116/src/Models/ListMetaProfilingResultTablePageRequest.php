<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ListMetaProfilingResultTablePageRequest extends Model
{
    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $dataRange;

    /**
     * @var float
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataUnit;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var int
     */
    public $isPartitioned;

    /**
     * @var bool
     */
    public $isSummary;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var bool
     */
    public $needTotalCount;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'componentType' => 'componentType',
        'dataRange' => 'dataRange',
        'dataSize' => 'dataSize',
        'dataUnit' => 'dataUnit',
        'dbName' => 'dbName',
        'groupBy' => 'groupBy',
        'isPartitioned' => 'isPartitioned',
        'isSummary' => 'isSummary',
        'migrationStatus' => 'migrationStatus',
        'needTotalCount' => 'needTotalCount',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'tableName' => 'tableName',
        'taskId' => 'taskId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->dataRange) {
            $res['dataRange'] = $this->dataRange;
        }

        if (null !== $this->dataSize) {
            $res['dataSize'] = $this->dataSize;
        }

        if (null !== $this->dataUnit) {
            $res['dataUnit'] = $this->dataUnit;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->groupBy) {
            $res['groupBy'] = $this->groupBy;
        }

        if (null !== $this->isPartitioned) {
            $res['isPartitioned'] = $this->isPartitioned;
        }

        if (null !== $this->isSummary) {
            $res['isSummary'] = $this->isSummary;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->needTotalCount) {
            $res['needTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['dataRange'])) {
            $model->dataRange = $map['dataRange'];
        }

        if (isset($map['dataSize'])) {
            $model->dataSize = $map['dataSize'];
        }

        if (isset($map['dataUnit'])) {
            $model->dataUnit = $map['dataUnit'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['groupBy'])) {
            $model->groupBy = $map['groupBy'];
        }

        if (isset($map['isPartitioned'])) {
            $model->isPartitioned = $map['isPartitioned'];
        }

        if (isset($map['isSummary'])) {
            $model->isSummary = $map['isSummary'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['needTotalCount'])) {
            $model->needTotalCount = $map['needTotalCount'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
