<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class cubeTableList extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var bool
     */
    public $customsql;

    /**
     * @var string
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var bool
     */
    public $factTable;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $tableName;

    /**
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
