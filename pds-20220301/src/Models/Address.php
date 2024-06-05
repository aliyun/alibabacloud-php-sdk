<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Address extends Model
{
    /**
     * @example 杭州市
     *
     * @var string
     */
    public $city;

    /**
     * @example 中国
     *
     * @var string
     */
    public $country;

    /**
     * @example 余杭区
     *
     * @var string
     */
    public $district;

    /**
     * @example 浙江省
     *
     * @var string
     */
    public $province;

    /**
     * @example 文一西路
     *
     * @var string
     */
    public $township;
    protected $_name = [
        'city'     => 'city',
        'country'  => 'country',
        'district' => 'district',
        'province' => 'province',
        'township' => 'township',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->district) {
            $res['district'] = $this->district;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->township) {
            $res['township'] = $this->township;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['district'])) {
            $model->district = $map['district'];
        }
        if (isset($map['province'])) {
            $model->province = $map['province'];
        }
        if (isset($map['township'])) {
            $model->township = $map['township'];
        }

        return $model;
    }
}
