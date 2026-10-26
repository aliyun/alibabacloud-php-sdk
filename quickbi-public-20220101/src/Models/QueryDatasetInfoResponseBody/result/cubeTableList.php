<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\cubeTableList\childTables;

class cubeTableList extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var childTables[]
     */
    public $childTables;

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
        'caption' => 'Caption',
        'childTables' => 'ChildTables',
        'customsql' => 'Customsql',
        'datasourceId' => 'DatasourceId',
        'dsType' => 'DsType',
        'factTable' => 'FactTable',
        'sql' => 'Sql',
        'tableName' => 'TableName',
        'uniqueId' => 'UniqueId',
    ];

    public function validate()
    {
        if (\is_array($this->childTables)) {
            Model::validateArray($this->childTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        if (null !== $this->childTables) {
            if (\is_array($this->childTables)) {
                $res['ChildTables'] = [];
                $n1 = 0;
                foreach ($this->childTables as $item1) {
                    $res['ChildTables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        if (isset($map['ChildTables'])) {
            if (!empty($map['ChildTables'])) {
                $model->childTables = [];
                $n1 = 0;
                foreach ($map['ChildTables'] as $item1) {
                    $model->childTables[$n1] = childTables::fromMap($item1);
                    ++$n1;
                }
            }
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
