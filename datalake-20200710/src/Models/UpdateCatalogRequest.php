<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateCatalogRequest extends Model
{
    /**
     * @description cataloginput
     *
     * @var CatalogInput
     */
    public $catalogInput;
    protected $_name = [
        'catalogInput' => 'CatalogInput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogInput) {
            $res['CatalogInput'] = null !== $this->catalogInput ? $this->catalogInput->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogInput'])) {
            $model->catalogInput = CatalogInput::fromMap($map['CatalogInput']);
        }

        return $model;
    }
}
