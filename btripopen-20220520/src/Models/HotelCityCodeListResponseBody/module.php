<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module\citys;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var citys[]
     */
    public $citys;

    /**
     * @example 108800
     *
     * @var string
     */
    public $proviceCode;

    /**
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'citys'        => 'citys',
        'proviceCode'  => 'provice_code',
        'provinceName' => 'province_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->citys) {
            $res['citys'] = [];
            if (null !== $this->citys && \is_array($this->citys)) {
                $n = 0;
                foreach ($this->citys as $item) {
                    $res['citys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->proviceCode) {
            $res['provice_code'] = $this->proviceCode;
        }
        if (null !== $this->provinceName) {
            $res['province_name'] = $this->provinceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['citys'])) {
            if (!empty($map['citys'])) {
                $model->citys = [];
                $n            = 0;
                foreach ($map['citys'] as $item) {
                    $model->citys[$n++] = null !== $item ? citys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['provice_code'])) {
            $model->proviceCode = $map['provice_code'];
        }
        if (isset($map['province_name'])) {
            $model->provinceName = $map['province_name'];
        }

        return $model;
    }
}
