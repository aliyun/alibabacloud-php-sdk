<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class RenameTableRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAsync;

    /**
     * @var TableInput
     */
    public $tableInput;

    /**
     * @example test_table_20201223
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'databaseName' => 'DatabaseName',
        'isAsync'      => 'IsAsync',
        'tableInput'   => 'TableInput',
        'tableName'    => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->isAsync) {
            $res['IsAsync'] = $this->isAsync;
        }
        if (null !== $this->tableInput) {
            $res['TableInput'] = null !== $this->tableInput ? $this->tableInput->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenameTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IsAsync'])) {
            $model->isAsync = $map['IsAsync'];
        }
        if (isset($map['TableInput'])) {
            $model->tableInput = TableInput::fromMap($map['TableInput']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
