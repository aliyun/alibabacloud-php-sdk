<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class cubeTableList extends Model
{
    /**
     * @description Indicates whether the data source table is valid. Valid values:
     *
     *   true: data source table
     *   false: custom table
     *
     * @example odps_40
     *
     * @var string
     */
    public $caption;

    /**
     * @description The display name of the table.
     *
     * @example false
     *
     * @var bool
     */
    public $customsql;

    /**
     * @description The name of the table.
     *
     * @example dfefd7f4-fc6e-42c9-b4******
     *
     * @var string
     */
    public $datasourceId;

    /**
     * @description The ID of the data source.
     *
     * @example maxcompute
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The unique ID of the table.
     *
     * @example true
     *
     * @var bool
     */
    public $factTable;

    /**
     * @description Indicates whether the table is a custom SQL table. Valid values:
     *
     *   true: custom SQL table
     *   false: non-custom SQL table
     *
     * @example select * from ****
     *
     * @var string
     */
    public $sql;

    /**
     * @description The list of tables used by the dataset.
     *
     * @example viewdasb8494aab2612473cb74992159fe****
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The type of the data source. Valid values:
     *
     *   mysql
     *   odps
     *   oracle
     *   ... and other data source types supported by Quick BI
     *
     * @example 7a62530b36
     *
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'caption'      => 'Caption',
        'customsql'    => 'Customsql',
        'datasourceId' => 'DatasourceId',
        'dsType'       => 'DsType',
        'factTable'    => 'FactTable',
        'sql'          => 'Sql',
        'tableName'    => 'TableName',
        'uniqueId'     => 'UniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->customsql) {
            $res['Customsql'] = $this->customsql;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->factTable) {
            $res['FactTable'] = $this->factTable;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cubeTableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['Customsql'])) {
            $model->customsql = $map['Customsql'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['FactTable'])) {
            $model->factTable = $map['FactTable'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}
