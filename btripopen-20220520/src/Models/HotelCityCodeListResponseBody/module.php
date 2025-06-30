<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module\citys;

class module extends Model
{
    /**
     * @var citys[]
     */
    public $citys;

    /**
     * @var string
     */
    public $proviceCode;

    /**
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'citys' => 'citys',
        'proviceCode' => 'provice_code',
        'provinceName' => 'province_name',
    ];

    public function validate()
    {
        if (\is_array($this->citys)) {
            Model::validateArray($this->citys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->citys) {
            if (\is_array($this->citys)) {
                $res['citys'] = [];
                $n1 = 0;
                foreach ($this->citys as $item1) {
                    $res['citys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['citys'])) {
            if (!empty($map['citys'])) {
                $model->citys = [];
                $n1 = 0;
                foreach ($map['citys'] as $item1) {
                    $model->citys[$n1] = citys::fromMap($item1);
                    ++$n1;
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
