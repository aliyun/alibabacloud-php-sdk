<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Dara\Model;

class province extends Model
{
    /**
     * @var int
     */
    public $provinceId;

    /**
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'provinceId' => 'ProvinceId',
        'provinceName' => 'ProvinceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
