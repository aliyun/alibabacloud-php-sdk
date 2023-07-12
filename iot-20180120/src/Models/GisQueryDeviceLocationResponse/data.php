<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationResponse;

use AlibabaCloud\Tea\Model;

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
        'adcode'           => 'Adcode',
        'city'             => 'City',
        'coordinateSystem' => 'CoordinateSystem',
        'country'          => 'Country',
        'deviceName'       => 'DeviceName',
        'ip'               => 'Ip',
        'latitude'         => 'Latitude',
        'longitude'        => 'Longitude',
        'productKey'       => 'ProductKey',
        'province'         => 'Province',
    ];

    public function validate()
    {
        Model::validateRequired('adcode', $this->adcode, true);
        Model::validateRequired('city', $this->city, true);
        Model::validateRequired('coordinateSystem', $this->coordinateSystem, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('latitude', $this->latitude, true);
        Model::validateRequired('longitude', $this->longitude, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('province', $this->province, true);
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
