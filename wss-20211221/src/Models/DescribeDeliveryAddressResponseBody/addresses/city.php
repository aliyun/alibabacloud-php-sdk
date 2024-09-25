<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Tea\Model;

class city extends Model
{
    /**
     * @example 33****
     *
     * @var int
     */
    public $cityId;

    /**
     * @var string
     */
    public $cityName;
    protected $_name = [
        'cityId'   => 'CityId',
        'cityName' => 'CityName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return city
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

        return $model;
    }
}
