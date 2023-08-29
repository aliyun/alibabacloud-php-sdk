<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
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
    protected $_name = [
        'catalogId'     => 'CatalogId',
        'databaseInput' => 'DatabaseInput',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseRequest
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

        return $model;
    }
}
