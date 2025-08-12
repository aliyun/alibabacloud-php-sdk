<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSyntheticProbeListResponseBody;

use AlibabaCloud\Dara\Model;

class ispCityList extends Model
{
    /**
     * @var string
     */
    public $areaCn;

    /**
     * @var string
     */
    public $areaEn;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityCn;

    /**
     * @var string
     */
    public $cityEn;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $countryCn;

    /**
     * @var string
     */
    public $countryEn;

    /**
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
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ispCn;

    /**
     * @var string
     */
    public $ispEn;

    /**
     * @var int
     */
    public $lmProbeCount;

    /**
     * @var int
     */
    public $mbProbeCount;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionCn;

    /**
     * @var string
     */
    public $regionEn;
    protected $_name = [
        'areaCn' => 'AreaCn',
        'areaEn' => 'AreaEn',
        'city' => 'City',
        'cityCn' => 'CityCn',
        'cityEn' => 'CityEn',
        'country' => 'Country',
        'countryCn' => 'CountryCn',
        'countryEn' => 'CountryEn',
        'idcV4ProbeCount' => 'IdcV4ProbeCount',
        'idcV6ProbeCount' => 'IdcV6ProbeCount',
        'ipPool' => 'IpPool',
        'isp' => 'Isp',
        'ispCn' => 'IspCn',
        'ispEn' => 'IspEn',
        'lmProbeCount' => 'LmProbeCount',
        'mbProbeCount' => 'MbProbeCount',
        'region' => 'Region',
        'regionCn' => 'RegionCn',
        'regionEn' => 'RegionEn',
    ];

    public function validate()
    {
        if (\is_array($this->ipPool)) {
            Model::validateArray($this->ipPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ipPool)) {
                $res['IpPool'] = [];
                $n1 = 0;
                foreach ($this->ipPool as $item1) {
                    $res['IpPool'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->ipPool = [];
                $n1 = 0;
                foreach ($map['IpPool'] as $item1) {
                    $model->ipPool[$n1] = $item1;
                    ++$n1;
                }
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
