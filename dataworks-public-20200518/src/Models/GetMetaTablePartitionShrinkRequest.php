<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetMetaTablePartitionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $dataSourceType;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sortCriterionShrink;
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'dataSourceType'      => 'DataSourceType',
        'databaseName'        => 'DatabaseName',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'sortCriterionShrink' => 'SortCriterion',
        'tableGuid'           => 'TableGuid',
        'tableName'           => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortCriterionShrink) {
            $res['SortCriterion'] = $this->sortCriterionShrink;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SortCriterion'])) {
            $model->sortCriterionShrink = $map['SortCriterion'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
