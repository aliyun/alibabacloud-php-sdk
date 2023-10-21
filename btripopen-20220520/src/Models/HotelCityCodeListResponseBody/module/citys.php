<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module\citys\districts;
use AlibabaCloud\Tea\Model;

class citys extends Model
{
    /**
     * @example 445222
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var districts[]
     */
    public $districts;
    protected $_name = [
        'cityCode'  => 'city_code',
        'cityName'  => 'city_name',
        'districts' => 'districts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->districts) {
            $res['districts'] = [];
            if (null !== $this->districts && \is_array($this->districts)) {
                $n = 0;
                foreach ($this->districts as $item) {
                    $res['districts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return citys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['districts'])) {
            if (!empty($map['districts'])) {
                $model->districts = [];
                $n                = 0;
                foreach ($map['districts'] as $item) {
                    $model->districts[$n++] = null !== $item ? districts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
