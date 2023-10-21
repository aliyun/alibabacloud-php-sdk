<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;

use AlibabaCloud\Tea\Model;

class ispCity extends Model
{
    /**
     * @description The city ID.
     *
     * @example 738
     *
     * @var string
     */
    public $city;

    /**
     * @description The city name.
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The carrier ID.
     *
     * @example 465
     *
     * @var string
     */
    public $isp;

    /**
     * @description The carrier name.
     *
     * @var string
     */
    public $ispName;
    protected $_name = [
        'city'     => 'City',
        'cityName' => 'CityName',
        'isp'      => 'Isp',
        'ispName'  => 'IspName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        return $model;
    }
}
