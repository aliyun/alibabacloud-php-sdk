<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableBasicInfoRequest extends Model
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
     * @description The HTTP status code returned.
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
     * @description The error message returned.
     *
     * @example false
     *
     * @var bool
     */
    public $extension;

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
     * @description Specifies whether to include extended fields in query results.
     *
     * This parameter takes effect only if you set the DataSourceType parameter to odps.
     * @example abc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
        'extension'      => 'Extension',
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
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
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
     * @return GetMetaTableBasicInfoRequest
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
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
