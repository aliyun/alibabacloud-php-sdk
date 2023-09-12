<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetProductRequest extends Model
{
    /**
     * @example 21000019
     *
     * @var string
     */
    public $distributorShopId;

    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;
    protected $_name = [
        'distributorShopId' => 'distributorShopId',
        'divisionCode'      => 'divisionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributorShopId) {
            $res['distributorShopId'] = $this->distributorShopId;
        }
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['distributorShopId'])) {
            $model->distributorShopId = $map['distributorShopId'];
        }
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        return $model;
    }
}
