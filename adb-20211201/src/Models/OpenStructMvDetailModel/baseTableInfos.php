<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\OpenStructMvDetailModel;

use AlibabaCloud\Dara\Model;

class baseTableInfos extends Model
{
    /**
     * @var bool
     */
    public $baseTableIsMv;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableEngine;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'baseTableIsMv' => 'BaseTableIsMv',
        'schemaName' => 'SchemaName',
        'tableEngine' => 'TableEngine',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseTableIsMv) {
            $res['BaseTableIsMv'] = $this->baseTableIsMv;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->tableEngine) {
            $res['TableEngine'] = $this->tableEngine;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['BaseTableIsMv'])) {
            $model->baseTableIsMv = $map['BaseTableIsMv'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['TableEngine'])) {
            $model->tableEngine = $map['TableEngine'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
