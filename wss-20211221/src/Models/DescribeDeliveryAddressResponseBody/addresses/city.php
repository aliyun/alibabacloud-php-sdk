<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Dara\Model;

class city extends Model
{
    /**
     * @var int
     */
    public $cityId;

    /**
     * @var string
     */
    public $cityName;
    protected $_name = [
        'cityId' => 'CityId',
        'cityName' => 'CityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
