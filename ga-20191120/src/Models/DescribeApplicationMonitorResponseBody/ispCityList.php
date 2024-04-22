<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeApplicationMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class ispCityList extends Model
{
    /**
     * @description The ID of the city in which the probe point of the ISP is deployed.
     *
     * @example 375
     *
     * @var string
     */
    public $city;

    /**
     * @description The name of the city in which the probe point of the ISP is deployed.
     *
     * @example Singapore
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The probe point ID of the ISP.
     *
     * @example 465
     *
     * @var string
     */
    public $isp;

    /**
     * @description The probe point name of the ISP.
     *
     * @example Alibaba
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
     * @return ispCityList
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
