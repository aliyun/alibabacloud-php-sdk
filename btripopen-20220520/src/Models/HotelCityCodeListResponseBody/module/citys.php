<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module\citys\districts;

class citys extends Model
{
    /**
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
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'districts' => 'districts',
    ];

    public function validate()
    {
        if (\is_array($this->districts)) {
            Model::validateArray($this->districts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }

        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }

        if (null !== $this->districts) {
            if (\is_array($this->districts)) {
                $res['districts'] = [];
                $n1 = 0;
                foreach ($this->districts as $item1) {
                    $res['districts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }

        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }

        if (isset($map['districts'])) {
            if (!empty($map['districts'])) {
                $model->districts = [];
                $n1 = 0;
                foreach ($map['districts'] as $item1) {
                    $model->districts[$n1] = districts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
