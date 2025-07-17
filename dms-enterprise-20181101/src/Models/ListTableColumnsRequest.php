<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListTableColumnsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description This parameter is required.
     *
     * @example 100g_customer
     *
     * @var string
     */
    public $tableName;

    /**
     * @example dbo
     *
     * @var string
     */
    public $tableSchemaName;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId' => 'DbId',
        'tableName' => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
        'tid' => 'Tid',
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTableColumnsRequest
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
