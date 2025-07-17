<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RemoveTableFromCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30000235594
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description This parameter is required.
     *
     * @example 43153
     *
     * @var int
     */
    public $dbId;

    /**
     * @description This parameter is required.
     *
     * @example test_table
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
     * @example 3****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'dbId' => 'DbId',
        'tableName' => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
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
     * @return RemoveTableFromCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
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
