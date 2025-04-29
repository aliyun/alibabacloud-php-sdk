<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard;

use AlibabaCloud\Dara\Model;

class hotelCitys extends Model
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
     * @var int
     */
    public $fee;
    protected $_name = [
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'fee' => 'fee',
    ];

    public function validate()
    {
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

        if (null !== $this->fee) {
            $res['fee'] = $this->fee;
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

        if (isset($map['fee'])) {
            $model->fee = $map['fee'];
        }

        return $model;
    }
}
