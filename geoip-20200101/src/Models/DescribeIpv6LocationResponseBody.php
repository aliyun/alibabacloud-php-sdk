<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpv6LocationResponseBody extends Model
{
    /**
     * @var string
     */
    public $provinceEn;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cityEn;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $county;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $countryEn;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $countryCode;
    protected $_name = [
        'provinceEn'  => 'ProvinceEn',
        'requestId'   => 'RequestId',
        'cityEn'      => 'CityEn',
        'ip'          => 'Ip',
        'isp'         => 'Isp',
        'latitude'    => 'Latitude',
        'city'        => 'City',
        'county'      => 'County',
        'longitude'   => 'Longitude',
        'countryEn'   => 'CountryEn',
        'province'    => 'Province',
        'country'     => 'Country',
        'countryCode' => 'CountryCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provinceEn) {
            $res['ProvinceEn'] = $this->provinceEn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cityEn) {
            $res['CityEn'] = $this->cityEn;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->county) {
            $res['County'] = $this->county;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->countryEn) {
            $res['CountryEn'] = $this->countryEn;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpv6LocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvinceEn'])) {
            $model->provinceEn = $map['ProvinceEn'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CityEn'])) {
            $model->cityEn = $map['CityEn'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['County'])) {
            $model->county = $map['County'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['CountryEn'])) {
            $model->countryEn = $map['CountryEn'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        return $model;
    }
}
