<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyIntentionInfoDo extends Model
{
    /**
     * @example 2021-07-08
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2021-07-08
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example SHA
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @example 10000
     *
     * @var int
     */
    public $price;

    /**
     * @example true
     *
     * @var bool
     */
    public $together;

    /**
     * @example 16
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkIn'  => 'check_in',
        'checkOut' => 'check_out',
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'price'    => 'price',
        'together' => 'together',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->together) {
            $res['together'] = $this->together;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyIntentionInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['together'])) {
            $model->together = $map['together'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
