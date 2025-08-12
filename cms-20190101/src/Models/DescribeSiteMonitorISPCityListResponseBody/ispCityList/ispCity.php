<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponseBody\ispCityList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponseBody\ispCityList\ispCity\IPPool;

class ispCity extends Model
{
    /**
     * @var string
     */
    public $area_en;

    /**
     * @var string
     */
    public $area_zh_cN;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityName_en;

    /**
     * @var string
     */
    public $cityName_zh_cN;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $country_en;

    /**
     * @var string
     */
    public $country_zh_cN;

    /**
     * @var IPPool
     */
    public $IPPool;

    /**
     * @var string
     */
    public $IPV4ProbeCount;

    /**
     * @var string
     */
    public $IPV6ProbeCount;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ispName_en;

    /**
     * @var string
     */
    public $ispName_zh_cN;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $region_en;

    /**
     * @var string
     */
    public $region_zh_cN;
    protected $_name = [
        'area_en' => 'Area.en',
        'area_zh_cN' => 'Area.zh_CN',
        'city' => 'City',
        'cityName_en' => 'CityName.en',
        'cityName_zh_cN' => 'CityName.zh_CN',
        'country' => 'Country',
        'country_en' => 'Country.en',
        'country_zh_cN' => 'Country.zh_CN',
        'IPPool' => 'IPPool',
        'IPV4ProbeCount' => 'IPV4ProbeCount',
        'IPV6ProbeCount' => 'IPV6ProbeCount',
        'isp' => 'Isp',
        'ispName_en' => 'IspName.en',
        'ispName_zh_cN' => 'IspName.zh_CN',
        'region' => 'Region',
        'region_en' => 'Region.en',
        'region_zh_cN' => 'Region.zh_CN',
    ];

    public function validate()
    {
        if (null !== $this->IPPool) {
            $this->IPPool->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area_en) {
            $res['Area.en'] = $this->area_en;
        }

        if (null !== $this->area_zh_cN) {
            $res['Area.zh_CN'] = $this->area_zh_cN;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->cityName_en) {
            $res['CityName.en'] = $this->cityName_en;
        }

        if (null !== $this->cityName_zh_cN) {
            $res['CityName.zh_CN'] = $this->cityName_zh_cN;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->country_en) {
            $res['Country.en'] = $this->country_en;
        }

        if (null !== $this->country_zh_cN) {
            $res['Country.zh_CN'] = $this->country_zh_cN;
        }

        if (null !== $this->IPPool) {
            $res['IPPool'] = null !== $this->IPPool ? $this->IPPool->toArray($noStream) : $this->IPPool;
        }

        if (null !== $this->IPV4ProbeCount) {
            $res['IPV4ProbeCount'] = $this->IPV4ProbeCount;
        }

        if (null !== $this->IPV6ProbeCount) {
            $res['IPV6ProbeCount'] = $this->IPV6ProbeCount;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->ispName_en) {
            $res['IspName.en'] = $this->ispName_en;
        }

        if (null !== $this->ispName_zh_cN) {
            $res['IspName.zh_CN'] = $this->ispName_zh_cN;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->region_en) {
            $res['Region.en'] = $this->region_en;
        }

        if (null !== $this->region_zh_cN) {
            $res['Region.zh_CN'] = $this->region_zh_cN;
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
        if (isset($map['Area.en'])) {
            $model->area_en = $map['Area.en'];
        }

        if (isset($map['Area.zh_CN'])) {
            $model->area_zh_cN = $map['Area.zh_CN'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CityName.en'])) {
            $model->cityName_en = $map['CityName.en'];
        }

        if (isset($map['CityName.zh_CN'])) {
            $model->cityName_zh_cN = $map['CityName.zh_CN'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Country.en'])) {
            $model->country_en = $map['Country.en'];
        }

        if (isset($map['Country.zh_CN'])) {
            $model->country_zh_cN = $map['Country.zh_CN'];
        }

        if (isset($map['IPPool'])) {
            $model->IPPool = IPPool::fromMap($map['IPPool']);
        }

        if (isset($map['IPV4ProbeCount'])) {
            $model->IPV4ProbeCount = $map['IPV4ProbeCount'];
        }

        if (isset($map['IPV6ProbeCount'])) {
            $model->IPV6ProbeCount = $map['IPV6ProbeCount'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['IspName.en'])) {
            $model->ispName_en = $map['IspName.en'];
        }

        if (isset($map['IspName.zh_CN'])) {
            $model->ispName_zh_cN = $map['IspName.zh_CN'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Region.en'])) {
            $model->region_en = $map['Region.en'];
        }

        if (isset($map['Region.zh_CN'])) {
            $model->region_zh_cN = $map['Region.zh_CN'];
        }

        return $model;
    }
}
