<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class DeleteProductVersionRequest extends Model
{
    /**
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;
    protected $_name = [
        'productVersionId' => 'ProductVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }

        return $model;
    }
}
