<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetEpdSummaryRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * This parameter is required.
     * @example C-20080808-1
     *
     * @var string
     */
    public $code;

    /**
     * @description The product id.
     *
     * This parameter is required.
     * @example 1024
     *
     * @var int
     */
    public $productId;

    /**
     * @description Product type: 1 indicates that the carbon footprint of the product is requested, and 5 indicates that the carbon footprint of the supply chain is requested.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $productType;
    protected $_name = [
        'code'        => 'code',
        'productId'   => 'productId',
        'productType' => 'productType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEpdSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        return $model;
    }
}
