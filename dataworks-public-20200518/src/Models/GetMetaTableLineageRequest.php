<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableLineageRequest extends Model
{
    /**
     * @description The name of the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The error message.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The type of the data source. Valid values: odps and emr.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * This parameter is required.
     * @example up
     *
     * @var string
     */
    public $direction;

    /**
     * @description The ID of the E-MapReduce (EMR) cluster. Set this parameter only when you query data in an EMR compute engine instance.
     *
     * @example odps.engine_name.table_name1
     *
     * @var string
     */
    public $nextPrimaryKey;

    /**
     * @description The name of the metadatabase.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The logic of paging. Set this parameter based on the value of the response parameter NextPrimaryKey when the value of the response parameter HasNext is true in the last query.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The HTTP status code.
     *
     * @example abc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
        'direction'      => 'Direction',
        'nextPrimaryKey' => 'NextPrimaryKey',
        'pageSize'       => 'PageSize',
        'tableGuid'      => 'TableGuid',
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
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->nextPrimaryKey) {
            $res['NextPrimaryKey'] = $this->nextPrimaryKey;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableLineageRequest
     */
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['NextPrimaryKey'])) {
            $model->nextPrimaryKey = $map['NextPrimaryKey'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
