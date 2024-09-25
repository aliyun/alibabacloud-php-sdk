<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Tea\Model;

class province extends Model
{
    /**
     * @example 330000
     *
     * @var int
     */
    public $provinceId;

    /**
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'provinceId'   => 'ProvinceId',
        'provinceName' => 'ProvinceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }
        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return province
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }
        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }

        return $model;
    }
}
