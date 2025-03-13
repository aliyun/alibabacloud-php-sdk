<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListRegionsRequest extends Model
{
    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $bizSource;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'bizSource'   => 'BizSource',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizSource) {
            $res['BizSource'] = $this->bizSource;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizSource'])) {
            $model->bizSource = $map['BizSource'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
