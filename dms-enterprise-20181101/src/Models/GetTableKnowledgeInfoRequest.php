<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetTableKnowledgeInfoRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableSchemaName;
    protected $_name = [
        'dbId' => 'DbId',
        'tableName' => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }

        return $model;
    }
}
