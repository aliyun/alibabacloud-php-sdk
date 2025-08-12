<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;

use AlibabaCloud\Dara\Model;

class ispCity extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'city' => 'City',
        'cityName' => 'CityName',
        'isp' => 'Isp',
        'ispName' => 'IspName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
