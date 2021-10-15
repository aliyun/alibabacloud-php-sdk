<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Address extends Model
{
    /**
     * @description AddressLine
     *
     * @var string
     */
    public $addressLine;

    /**
     * @description City
     *
     * @var string
     */
    public $city;

    /**
     * @description Country
     *
     * @var string
     */
    public $country;

    /**
     * @description District
     *
     * @var string
     */
    public $district;

    /**
     * @description Language
     *
     * @var string
     */
    public $language;

    /**
     * @description Province
     *
     * @var string
     */
    public $province;

    /**
     * @description Township
     *
     * @var string
     */
    public $township;
    protected $_name = [
        'addressLine' => 'AddressLine',
        'city'        => 'City',
        'country'     => 'Country',
        'district'    => 'District',
        'language'    => 'Language',
        'province'    => 'Province',
        'township'    => 'Township',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLine) {
            $res['AddressLine'] = $this->addressLine;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->township) {
            $res['Township'] = $this->township;
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
        if (isset($map['AddressLine'])) {
            $model->addressLine = $map['AddressLine'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Township'])) {
            $model->township = $map['Township'];
        }

        return $model;
    }
}
