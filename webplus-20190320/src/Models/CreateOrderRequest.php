<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'productName' => 'ProductName',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
