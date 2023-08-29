<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateDatabaseRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var DatabaseInput
     */
    public $databaseInput;

    /**
     * @example database_test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'catalogId'     => 'CatalogId',
        'databaseInput' => 'DatabaseInput',
        'name'          => 'Name',
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
        if (null !== $this->databaseInput) {
            $res['DatabaseInput'] = null !== $this->databaseInput ? $this->databaseInput->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseInput'])) {
            $model->databaseInput = DatabaseInput::fromMap($map['DatabaseInput']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
