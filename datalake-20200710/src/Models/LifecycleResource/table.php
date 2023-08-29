<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource;

use AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource\table\sd;
use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var sd
     */
    public $sd;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'databaseName' => 'DatabaseName',
        'parameters'   => 'Parameters',
        'sd'           => 'Sd',
        'tableName'    => 'TableName',
        'tableType'    => 'TableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->sd) {
            $res['Sd'] = null !== $this->sd ? $this->sd->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Sd'])) {
            $model->sd = sd::fromMap($map['Sd']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
