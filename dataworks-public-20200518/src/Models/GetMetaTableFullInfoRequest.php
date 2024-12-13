<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableFullInfoRequest extends Model
{
    /**
     * @description The ID of the EMR cluster. You can log in to the EMR management console to obtain the cluster ID.
     *
     * @example C-010A704DA760****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Data type, currently only supports the value `emr`.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The name of the EMR database. You can obtain the database name by calling the [ListMetaDB](https://help.aliyun.com/document_detail/185662.html) interface.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The page number requested for pagination.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of items per page, with a default of 10 and a maximum of 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The unique identifier of the table. You can obtain the unique identifier by calling the [GetMetaDBTableList](https://help.aliyun.com/document_detail/173916.html) interface.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the EMR table. You can obtain the table name by calling the [GetMetaDBTableList](https://help.aliyun.com/document_detail/173916.html) interface.
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
        'pageNum'        => 'PageNum',
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
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
     * @return GetMetaTableFullInfoRequest
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
