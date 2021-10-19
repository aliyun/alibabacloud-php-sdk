<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class IPLocationInfo extends Model
{
    /**
     * @var string
     */
    public $cityId;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $countryId;
    protected $_name = [
        'cityId'      => 'CityId',
        'countryName' => 'CountryName',
        'cityName'    => 'CityName',
        'countryId'   => 'CountryId',
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
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
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
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        return $model;
    }
}
