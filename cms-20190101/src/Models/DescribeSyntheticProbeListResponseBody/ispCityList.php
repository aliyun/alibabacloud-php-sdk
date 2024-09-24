<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSyntheticProbeListResponseBody;

use AlibabaCloud\Tea\Model;

class ispCityList extends Model
{
    /**
     * @var string
     */
    public $areaCn;

    /**
     * @example Huabei
     *
     * @var string
     */
    public $areaEn;

    /**
     * @example 738
     *
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityCn;

    /**
     * @example Beijing
     *
     * @var string
     */
    public $cityEn;

    /**
     * @example 629
     *
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $countryCn;

    /**
     * @example China
     *
     * @var string
     */
    public $countryEn;

    /**
     * @example 1
     *
     * @var int
     */
    public $idcV4ProbeCount;

    /**
     * @var int
     */
    public $idcV6ProbeCount;

    /**
     * @var string[]
     */
    public $ipPool;

    /**
     * @example 232
     *
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ispCn;

    /**
     * @example China-Unicom
     *
     * @var string
     */
    public $ispEn;

    /**
     * @example 1
     *
     * @var int
     */
    public $lmProbeCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $mbProbeCount;

    /**
     * @example 264
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionCn;

    /**
     * @example Jiangxi
     *
     * @var string
     */
    public $regionEn;
    protected $_name = [
        'areaCn'          => 'AreaCn',
        'areaEn'          => 'AreaEn',
        'city'            => 'City',
        'cityCn'          => 'CityCn',
        'cityEn'          => 'CityEn',
        'country'         => 'Country',
        'countryCn'       => 'CountryCn',
        'countryEn'       => 'CountryEn',
        'idcV4ProbeCount' => 'IdcV4ProbeCount',
        'idcV6ProbeCount' => 'IdcV6ProbeCount',
        'ipPool'          => 'IpPool',
        'isp'             => 'Isp',
        'ispCn'           => 'IspCn',
        'ispEn'           => 'IspEn',
        'lmProbeCount'    => 'LmProbeCount',
        'mbProbeCount'    => 'MbProbeCount',
        'region'          => 'Region',
        'regionCn'        => 'RegionCn',
        'regionEn'        => 'RegionEn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaCn) {
            $res['AreaCn'] = $this->areaCn;
        }
        if (null !== $this->areaEn) {
            $res['AreaEn'] = $this->areaEn;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->cityCn) {
            $res['CityCn'] = $this->cityCn;
        }
        if (null !== $this->cityEn) {
            $res['CityEn'] = $this->cityEn;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->countryCn) {
            $res['CountryCn'] = $this->countryCn;
        }
        if (null !== $this->countryEn) {
            $res['CountryEn'] = $this->countryEn;
        }
        if (null !== $this->idcV4ProbeCount) {
            $res['IdcV4ProbeCount'] = $this->idcV4ProbeCount;
        }
        if (null !== $this->idcV6ProbeCount) {
            $res['IdcV6ProbeCount'] = $this->idcV6ProbeCount;
        }
        if (null !== $this->ipPool) {
            $res['IpPool'] = $this->ipPool;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->ispCn) {
            $res['IspCn'] = $this->ispCn;
        }
        if (null !== $this->ispEn) {
            $res['IspEn'] = $this->ispEn;
        }
        if (null !== $this->lmProbeCount) {
            $res['LmProbeCount'] = $this->lmProbeCount;
        }
        if (null !== $this->mbProbeCount) {
            $res['MbProbeCount'] = $this->mbProbeCount;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionCn) {
            $res['RegionCn'] = $this->regionCn;
        }
        if (null !== $this->regionEn) {
            $res['RegionEn'] = $this->regionEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaCn'])) {
            $model->areaCn = $map['AreaCn'];
        }
        if (isset($map['AreaEn'])) {
            $model->areaEn = $map['AreaEn'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CityCn'])) {
            $model->cityCn = $map['CityCn'];
        }
        if (isset($map['CityEn'])) {
            $model->cityEn = $map['CityEn'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['CountryCn'])) {
            $model->countryCn = $map['CountryCn'];
        }
        if (isset($map['CountryEn'])) {
            $model->countryEn = $map['CountryEn'];
        }
        if (isset($map['IdcV4ProbeCount'])) {
            $model->idcV4ProbeCount = $map['IdcV4ProbeCount'];
        }
        if (isset($map['IdcV6ProbeCount'])) {
            $model->idcV6ProbeCount = $map['IdcV6ProbeCount'];
        }
        if (isset($map['IpPool'])) {
            if (!empty($map['IpPool'])) {
                $model->ipPool = $map['IpPool'];
            }
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['IspCn'])) {
            $model->ispCn = $map['IspCn'];
        }
        if (isset($map['IspEn'])) {
            $model->ispEn = $map['IspEn'];
        }
        if (isset($map['LmProbeCount'])) {
            $model->lmProbeCount = $map['LmProbeCount'];
        }
        if (isset($map['MbProbeCount'])) {
            $model->mbProbeCount = $map['MbProbeCount'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionCn'])) {
            $model->regionCn = $map['RegionCn'];
        }
        if (isset($map['RegionEn'])) {
            $model->regionEn = $map['RegionEn'];
        }

        return $model;
    }
}
