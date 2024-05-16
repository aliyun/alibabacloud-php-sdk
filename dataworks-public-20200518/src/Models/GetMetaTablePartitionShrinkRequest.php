<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTablePartitionShrinkRequest extends Model
{
    /**
     * @description The name of the metatable in the EMR cluster. This parameter is required only if you set the DataSourceType parameter to emr.
     *
     * You can call the [GetMetaDBTableList](https://help.aliyun.com/document_detail/173916.html) operation to query the name of the metatable.
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The field that is used to sort partitions in the metatable. Valid values: name and modify_time.
     *
     * By default, partitions in the metatable are sorted based on their creation time.
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
     * @description The GUID of the metatable.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the EMR cluster. This parameter is required only if you set the DataSourceType parameter to emr.
     *
     * You can log on to the [EMR console](https://emr.console.aliyun.com/?spm=a2c4g.11186623.0.0.965cc5c2GeiHet#/cn-hangzhou) to obtain the ID of the EMR cluster.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The order in which partitions in the metatable are sorted. Valid values: asc and desc. Default value: desc.
     *
     * @var string
     */
    public $sortCriterionShrink;

    /**
     * @description The name of the metadatabase. This parameter is required only if you set the DataSourceType parameter to emr.
     *
     * You can call the [ListMetaDB](https://help.aliyun.com/document_detail/185662.html) operation to query the name of the metadatabase.
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The logic for sorting partitions in the metatable.
     *
     * @example abc
     *
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

    /**
     * @param array $map
     *
     * @return GetMetaTablePartitionShrinkRequest
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
