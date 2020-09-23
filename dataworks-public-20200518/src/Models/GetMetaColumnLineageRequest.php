<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaColumnLineageRequest extends Model
{
    /**
     * @var string
     */
    public $columnGuid;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'columnGuid'     => 'ColumnGuid',
        'direction'      => 'Direction',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'clusterId'      => 'ClusterId',
        'databaseName'   => 'DatabaseName',
        'tableName'      => 'TableName',
        'columnName'     => 'ColumnName',
        'dataSourceType' => 'DataSourceType',
    ];

    public function validate()
    {
        Model::validateRequired('direction', $this->direction, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaColumnLineageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
