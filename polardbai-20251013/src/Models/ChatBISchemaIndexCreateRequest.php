<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBISchemaIndexCreateRequest extends Model
{
    /**
     * @var string
     */
    public $columnsExcluded;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $tableNameSuffix;

    /**
     * @var string
     */
    public $tablesIncluded;

    /**
     * @var int
     */
    public $toSample;
    protected $_name = [
        'columnsExcluded' => 'ColumnsExcluded',
        'dbName' => 'DbName',
        'instanceName' => 'InstanceName',
        'tableNameSuffix' => 'TableNameSuffix',
        'tablesIncluded' => 'TablesIncluded',
        'toSample' => 'ToSample',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnsExcluded) {
            $res['ColumnsExcluded'] = $this->columnsExcluded;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->tableNameSuffix) {
            $res['TableNameSuffix'] = $this->tableNameSuffix;
        }

        if (null !== $this->tablesIncluded) {
            $res['TablesIncluded'] = $this->tablesIncluded;
        }

        if (null !== $this->toSample) {
            $res['ToSample'] = $this->toSample;
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
        if (isset($map['ColumnsExcluded'])) {
            $model->columnsExcluded = $map['ColumnsExcluded'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['TableNameSuffix'])) {
            $model->tableNameSuffix = $map['TableNameSuffix'];
        }

        if (isset($map['TablesIncluded'])) {
            $model->tablesIncluded = $map['TablesIncluded'];
        }

        if (isset($map['ToSample'])) {
            $model->toSample = $map['ToSample'];
        }

        return $model;
    }
}
