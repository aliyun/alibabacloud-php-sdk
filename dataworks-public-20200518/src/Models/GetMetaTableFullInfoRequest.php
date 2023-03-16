<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableFullInfoRequest extends Model
{
    /**
     * @description The ID of the E-MapReduce (EMR) cluster. You can log on to the EMR console to obtain the ID of the cluster.
     *
     * @example C-010A704DA760****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the data source. Only emr is supported.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The name of the metadatabase of the EMR cluster. You can call the [ListMetaDB](~~185662~~) operation to query the name of the metadatabase.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

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
     * @description The GUID of the metatable. You can call the [GetMetaDBTableList](~~173916~~) operation to query the GUID of the metatable.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the metatable in the EMR cluster. You can call the [GetMetaDBTableList](~~173916~~) operation to query the name of the metatable.
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
