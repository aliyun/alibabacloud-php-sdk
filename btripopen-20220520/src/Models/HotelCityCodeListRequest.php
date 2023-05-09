<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelCityCodeListRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $countryCode;
    protected $_name = [
        'countryCode' => 'country_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelCityCodeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }

        return $model;
    }
}
