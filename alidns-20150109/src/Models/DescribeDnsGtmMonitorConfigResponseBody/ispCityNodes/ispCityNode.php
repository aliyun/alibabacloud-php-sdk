<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorConfigResponseBody\ispCityNodes;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description The code of the monitored city node.
     *
     * @example 572
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The display name of the monitored city node.
     *
     * @example Qingdao
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The code of the country or region.
     *
     * @example 001
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The display name of the country or region.
     *
     * @example China
     *
     * @var string
     */
    public $countryName;

    /**
     * @description The code of the monitored Internet service provider (ISP) node.
     *
     * @example 123
     *
     * @var string
     */
    public $ispCode;

    /**
     * @description The name of the ISP.
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
