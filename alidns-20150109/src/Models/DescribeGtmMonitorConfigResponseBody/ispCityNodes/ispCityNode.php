<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponseBody\ispCityNodes;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description The code of the city where the monitored node is deployed.
     *
     * @example 503
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The display name of the city where the monitored node is deployed.
     *
     * @example Zhangjiakou
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The code of the country where the monitored node is deployed.
     *
     * @example 001
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The display name of the country where the monitored node is deployed.
     *
     * @example China
     *
     * @var string
     */
    public $countryName;

    /**
     * @description The code of the Internet service provider (ISP) to which the monitored node belongs.
     *
     * @example 465
     *
     * @var string
     */
    public $ispCode;

    /**
     * @description The display name of the ISP to which the monitored node belongs.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $ispName;
    protected $_name = [
        'cityCode'    => 'CityCode',
        'cityName'    => 'CityName',
        'countryCode' => 'CountryCode',
        'countryName' => 'CountryName',
        'ispCode'     => 'IspCode',
        'ispName'     => 'IspName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        return $model;
    }
}
