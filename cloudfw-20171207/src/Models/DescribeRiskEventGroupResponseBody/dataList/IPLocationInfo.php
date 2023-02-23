<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class IPLocationInfo extends Model
{
    /**
     * @description The ID of the city to which the IP address belongs.
     *
     * @example 510100
     *
     * @var string
     */
    public $cityId;

    /**
     * @description The name of the city to which the IP address belongs.
     *
     * @example Chengdu, Sichuan Province
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The ID of the country to which the IP address belongs.
     *
     * @example CN
     *
     * @var string
     */
    public $countryId;

    /**
     * @description The name of the country to which the IP address belongs.
     *
     * @example China
     *
     * @var string
     */
    public $countryName;
    protected $_name = [
        'cityId'      => 'CityId',
        'cityName'    => 'CityName',
        'countryId'   => 'CountryId',
        'countryName' => 'CountryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPLocationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }

        return $model;
    }
}
