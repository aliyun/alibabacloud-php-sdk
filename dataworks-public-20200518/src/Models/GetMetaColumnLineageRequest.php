<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaColumnLineageRequest extends Model
{
    /**
     * @description The ID of the E-MapReduce (EMR) cluster. Configure this parameter only when you query data in an EMR compute engine instance.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The GUID of the field.
     *
     * @example odps.engine_name.table_name.column_name
     *
     * @var string
     */
    public $columnGuid;

    /**
     * @description The name of the field.
     *
     * @example abc
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The type of the data source. Valid values: odps and emr.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The name of the database.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Specifies whether to query the ancestor or descendant lineage of the field. The value up indicates the ancestor lineage. The value down indicates the descendant lineage.
     *
     * @example up
     *
     * @var string
     */
    public $direction;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'columnGuid'     => 'ColumnGuid',
        'columnName'     => 'ColumnName',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
        'direction'      => 'Direction',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
