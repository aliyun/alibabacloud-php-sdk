<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DeleteCatalogRequest extends Model
{
    /**
     * @description CatalogId
     *
     * This parameter is required.
     * @example catalog_test
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAsync;
    protected $_name = [
        'catalogId' => 'CatalogId',
        'isAsync'   => 'IsAsync',
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
        if (null !== $this->isAsync) {
            $res['IsAsync'] = $this->isAsync;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['IsAsync'])) {
            $model->isAsync = $map['IsAsync'];
        }

        return $model;
    }
}
