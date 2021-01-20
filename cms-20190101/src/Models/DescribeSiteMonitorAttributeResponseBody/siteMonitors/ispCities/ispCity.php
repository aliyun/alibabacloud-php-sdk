<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;

use AlibabaCloud\Tea\Model;

class ispCity extends Model
{
    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'cityName' => 'CityName',
        'city'     => 'City',
        'ispName'  => 'IspName',
        'isp'      => 'Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
