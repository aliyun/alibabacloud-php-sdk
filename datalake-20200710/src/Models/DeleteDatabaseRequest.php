<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatabaseRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @example false
     *
     * @var bool
     */
    public $cascade;

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
        'async'     => 'Async',
        'cascade'   => 'Cascade',
        'catalogId' => 'CatalogId',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->cascade) {
            $res['Cascade'] = $this->cascade;
        }
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
     * @return DeleteDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Cascade'])) {
            $model->cascade = $map['Cascade'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
