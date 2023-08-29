<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreateTableRequest extends Model
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
     * @var TableInput
     */
    public $tableInput;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'databaseName' => 'DatabaseName',
        'tableInput'   => 'TableInput',
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
        if (null !== $this->tableInput) {
            $res['TableInput'] = null !== $this->tableInput ? $this->tableInput->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableRequest
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
        if (isset($map['TableInput'])) {
            $model->tableInput = TableInput::fromMap($map['TableInput']);
        }

        return $model;
    }
}
