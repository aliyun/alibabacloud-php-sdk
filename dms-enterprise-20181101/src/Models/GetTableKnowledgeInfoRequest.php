<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetTableKnowledgeInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $dbId;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetTableKnowledgeInfoRequest
     */
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
