<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $adcode;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $coordinateSystem;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'adcode' => 'Adcode',
        'city' => 'City',
        'coordinateSystem' => 'CoordinateSystem',
        'country' => 'Country',
        'deviceName' => 'DeviceName',
        'ip' => 'Ip',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'productKey' => 'ProductKey',
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adcode) {
            $res['Adcode'] = $this->adcode;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->coordinateSystem) {
            $res['CoordinateSystem'] = $this->coordinateSystem;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['Adcode'])) {
            $model->adcode = $map['Adcode'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CoordinateSystem'])) {
            $model->coordinateSystem = $map['CoordinateSystem'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
