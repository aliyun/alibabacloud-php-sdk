<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\GeoCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\GeoCodeResponseBody\data\building;

class data extends Model
{
    /**
     * @var building
     */
    public $building;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $cityCode;
    /**
     * @var string
     */
    public $district;
    /**
     * @var string
     */
    public $districtCode;
    /**
     * @var string
     */
    public $latitude;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $longitude;
    /**
     * @var string
     */
    public $number;
    /**
     * @var string
     */
    public $province;
    /**
     * @var string
     */
    public $street;
    protected $_name = [
        'building'     => 'building',
        'city'         => 'city',
        'cityCode'     => 'cityCode',
        'district'     => 'district',
        'districtCode' => 'districtCode',
        'latitude'     => 'latitude',
        'level'        => 'level',
        'longitude'    => 'longitude',
        'number'       => 'number',
        'province'     => 'province',
        'street'       => 'street',
    ];

    public function validate()
    {
        if (null !== $this->building) {
            $this->building->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->building) {
            $res['building'] = null !== $this->building ? $this->building->toArray($noStream) : $this->building;
        }

        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->cityCode) {
            $res['cityCode'] = $this->cityCode;
        }

        if (null !== $this->district) {
            $res['district'] = $this->district;
        }

        if (null !== $this->districtCode) {
            $res['districtCode'] = $this->districtCode;
        }

        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->province) {
            $res['province'] = $this->province;
        }

        if (null !== $this->street) {
            $res['street'] = $this->street;
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
        if (isset($map['building'])) {
            $model->building = building::fromMap($map['building']);
        }

        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['cityCode'])) {
            $model->cityCode = $map['cityCode'];
        }

        if (isset($map['district'])) {
            $model->district = $map['district'];
        }

        if (isset($map['districtCode'])) {
            $model->districtCode = $map['districtCode'];
        }

        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['province'])) {
            $model->province = $map['province'];
        }

        if (isset($map['street'])) {
            $model->street = $map['street'];
        }

        return $model;
    }
}
