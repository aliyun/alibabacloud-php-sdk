<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelCityCodeListRequest extends Model
{
    /**
     * @var string
     */
    public $countryCode;
    protected $_name = [
        'countryCode' => 'country_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
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
        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }

        return $model;
    }
}
