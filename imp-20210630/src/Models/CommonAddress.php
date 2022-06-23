<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CommonAddress extends Model
{
    /**
     * @description 地址
     *
     * @var string
     */
    public $address;

    /**
     * @description 城市
     *
     * @var string
     */
    public $city;

    /**
     * @description 国家
     *
     * @var string
     */
    public $country;

    /**
     * @description 区域
     *
     * @var string
     */
    public $state;

    /**
     * @description zip
     *
     * @var string
     */
    public $zip;
    protected $_name = [
        'address' => 'Address',
        'city'    => 'City',
        'country' => 'Country',
        'state'   => 'State',
        'zip'     => 'Zip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->zip) {
            $res['Zip'] = $this->zip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Zip'])) {
            $model->zip = $map['Zip'];
        }

        return $model;
    }
}
