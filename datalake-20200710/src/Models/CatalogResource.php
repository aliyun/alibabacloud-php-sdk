<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CatalogResource extends Model
{
    /**
     * @var string
     */
    public $catalogId;
    protected $_name = [
        'catalogId' => 'CatalogId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }

        return $model;
    }
}
