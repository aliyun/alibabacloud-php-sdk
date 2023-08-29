<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetDatabaseRequest extends Model
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
    public $name;
    protected $_name = [
        'catalogId' => 'CatalogId',
        'name'      => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
