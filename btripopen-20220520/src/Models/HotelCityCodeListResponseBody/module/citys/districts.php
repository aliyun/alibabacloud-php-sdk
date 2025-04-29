<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponseBody\module\citys;

use AlibabaCloud\Dara\Model;

class districts extends Model
{
    /**
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $districtName;
    protected $_name = [
        'districtCode' => 'district_code',
        'districtName' => 'district_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->districtCode) {
            $res['district_code'] = $this->districtCode;
        }

        if (null !== $this->districtName) {
            $res['district_name'] = $this->districtName;
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
        if (isset($map['district_code'])) {
            $model->districtCode = $map['district_code'];
        }

        if (isset($map['district_name'])) {
            $model->districtName = $map['district_name'];
        }

        return $model;
    }
}
