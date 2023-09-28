<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class TerminateProvisionedProductRequest extends Model
{
    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;
    protected $_name = [
        'provisionedProductId' => 'ProvisionedProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TerminateProvisionedProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }

        return $model;
    }
}
