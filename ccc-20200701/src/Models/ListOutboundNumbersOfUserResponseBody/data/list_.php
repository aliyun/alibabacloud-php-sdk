<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListOutboundNumbersOfUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @example 0830019****
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'city'     => 'City',
        'number'   => 'Number',
        'province' => 'Province',
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
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
